// Requis
var gulp = require('gulp');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Variables de chemins
var source = './src'; // dossier de travail
var destination = './dist'; // dossier à livrer
var bower = './bower_components'; // dossier bower

gulp.task('bower', function () {
  return plugins.bower({
    cmd: 'update'
  });
});

gulp.task('css', function () {
  return gulp.src(source + '/assets/sass/*.scss')
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.sass().on('error', plugins.sass.logError))
    .pipe(plugins.csscomb())
    .pipe(plugins.cssbeautify({
      indent: '  '
    }))
    .pipe(plugins.autoprefixer())
    .pipe(plugins.sourcemaps.write('./maps'))
    .pipe(gulp.dest(destination + '/assets/css/'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers SCSS compilé avec succès ' + plugins.util.colors.bgGreen.red.bold('(ou pas)') + ' ♠'));
    });
});

// Tâche "minify" pour ne pas avoir une duplication du fichier min.css + minification CSS
gulp.task('minify', function () {
  return gulp.src(destination + '/assets/css/*.min.css', {
      read: false
    })
    .pipe(plugins.clean())
    .on('end', function () {
      plugins.util.log(plugins.util.colors.yellow('♠ La suppressions des fichiers *.min.css est terminée ♠'));
      return gulp.src(destination + '/assets/css/*.css')
        .pipe(plugins.csso())
        .pipe(plugins.rename({
          suffix: '.min'
        }))
        .pipe(gulp.dest(destination + '/assets/css/'))
        .on('end', function () {
          plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers css minifié avec succès ♠'));
          //      plugins.util.log(plugins.util.colors.red('\\--------------------------------------------------/'));
          //      plugins.util.log(plugins.util.colors.red('\\ Attention aux fichiers .min.css qui se multiplie /'));
          //      plugins.util.log(plugins.util.colors.red('\\--------------------------------------------------/'));
        });
    });
});

// Tâche "Javascript" pour la duplication des fichiers JS de src vers dist
gulp.task('javascript', function () {
  return gulp.src(source + '/assets/js/*.js')
    .pipe(gulp.dest(destination + '/assets/js'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers JavaScript copiés dans le dossier de prod avec succès ♠'));
    });
});

// Tâche "Bootstrap CSS"
gulp.task('bootstrapCSS', function () {
  return gulp.src(source + '/assets/bootstrap/bootstrap.scss')
    .pipe(plugins.sass())
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(destination + '/assets/bootstrap'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers Bootstrap CSS ajoutées au projet avec succès ♠'));
    });
});

// Tâche "Bootstrap Javascript"
gulp.task('bootstrapJS', function () {
  return gulp.src(bower + '/bootstrap-sass/assets/javascripts/bootstrap.min.js')
    .pipe(gulp.dest(destination + '/assets/js/'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers Bootstrap JS ajoutées au projet avec succès ♠'));
    });
});

// Tâche "jQuery"
gulp.task('jquery', function () {
  return gulp.src(bower + '/jquery/dist/jquery.min.js')
    .pipe(gulp.dest(destination + '/assets/js/'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichier jQuery ajoutées au projet avec succès ♠'));
    });
});

// Tâche "Font-Awesome"
gulp.task('fontawesome', function () {
  return gulp.src(bower + '/font-awesome/fonts/fontawesome-webfont.{woff,ttf,svg}')
    .pipe(gulp.dest(destination + '/assets/fonts/'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Typo Font-Awesome ajoutées au projet avec succès ♠'));
    });
});

// Tâche "assets"
gulp.task('assets', ['jquery', 'fontawesome', 'bootstrapCSS', 'bootstrapJS']);

// Tâche "build"
gulp.task('build', ['css']);

// Tâche "prod" = minify
gulp.task('prod', ['minify']);

// Tâche "watch" = je surveille *scss
gulp.task('watch', function () {
  gulp.watch(source + '/assets/sass/*.scss', ['build']);
  gulp.watch(source + '/assets/js/*.js', ['javascript']);
});

// Tâche par défaut
gulp.task('default', ['watch']);