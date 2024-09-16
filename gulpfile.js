/* package */
const { src, dest, watch, series, parallel } = require("gulp");
// const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const sassGlob = require("gulp-sass-glob-use-forward");
const mmq = require("gulp-merge-media-queries");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");
const cleanCSS = require("gulp-clean-css");
const cssnext = require("postcss-cssnext");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const imageminSvgo = require("imagemin-svgo");
const browserSync = require("browser-sync");
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");

// 読み込み先
const srcPath = {
  css: "./src/sass/**/*.scss",
  js: "./src/js/**/*",
  img: "./src/images/**/*",
  php: "./**/*.php",
};

// WordPress反映用
const themeName = "WordPressTheme"; // WordPress theme name
const destWpPath = {
  css: `./${themeName}/assets/css/`,
  js: `./${themeName}/assets/js/`,
  img: `./${themeName}/assets/images/`,
};

const browsers = [
  "last 2 versions",
  "> 5%",
  "ie = 11",
  "not ie <= 10",
  "ios >= 8",
  "and_chr >= 5",
  "Android >= 5",
];
const cssSass = () => {
  return src(srcPath.css)
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError("Error:<%= error.message %>"),
      })
    )
    .pipe(sassGlob())
    .pipe(
      sass.sync({
        includePaths: ["src/sass"],
        outputStyle: "expanded",
      })
    ) //指定できるキー expanded compressed
    .pipe(
      postcss([
        autoprefixer({
          // autoprefixer
          grid: true,
        }),
      ])
    )
    .pipe(postcss([cssdeclsort({ order: "alphabetical" }) ]))
    .pipe(mmq()) // media query mapper
    .pipe(postcss([cssnext({
          features : {
              rem: false
          }
      },browsers)]))
    .pipe(sourcemaps.write("./"))
    .pipe(dest(destWpPath.css))
    .pipe(
      notify({
        message: "さあや頑張って偉い！Sassコンパイルしたよ！",
        onLast: true,
      })
    );
};

// 画像圧縮
const imgImagemin = () => {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80,
          }),
          imageminPngquant(),
          imageminSvgo({
            plugins: [
              {
                removeViewbox: false,
              },
            ],
          }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest(destWpPath.img));
};

// js圧縮
const jsBabel = () => {
  return (
    src(srcPath.js)
      .pipe(
        plumber({
          errorHandler: notify.onError("Error: <%= error.message %>"),
        })
      )
      .pipe(
        babel({
          presets: ["@babel/preset-env"],
        })
      )
      // .min.jsにする場合
      // .pipe(uglify())
      // .pipe(rename({ extname: ".js" }))
      .pipe(dest(destWpPath.js))
  );
};

// ブラウザーシンク
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};

const browserSyncOption = {
  // Localで動かすWPのサイトドメイン
  proxy: "http://wpdartsassfromsprei.local/",
  open: "true",
  watchOptions: {
    debounceDelay: 1000,
  },
  reloadOnRestart: true,
};

const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

const watchFiles = () => {
  watch(srcPath.css, series(cssSass, browserSyncReload));
  watch(srcPath.js, series(jsBabel, browserSyncReload));
  watch(srcPath.img, series(imgImagemin, browserSyncReload));
  watch(srcPath.php, series(browserSyncReload));
};
exports.default = series(
  series(cssSass, jsBabel, imgImagemin),
  parallel(watchFiles, browserSyncFunc)
);
