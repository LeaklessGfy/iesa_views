// Requis
var gulp = require('gulp');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Variables de chemins
var source = './src'; // dossier de travail
var destination = './res'; // dossier à livrer

gulp.task('css', function () {
  return gulp.src(source + '/sass/*.scss')
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.sass().on('error', plugins.sass.logError))
    .pipe(plugins.csscomb())
    .pipe(plugins.cssbeautify({
      indent: '  '
    }))
    .pipe(plugins.autoprefixer())
    .pipe(plugins.sourcemaps.write('./maps'))
    .pipe(gulp.dest(destination + '/css/'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers SCSS compilé avec succès ' + plugins.util.colors.bgGreen.red.bold('(ou pas)') + ' ♠'));
    });
});

// Tâche "minify" pour ne pas avoir une duplication du fichier min.css + minification CSS
gulp.task('minify', function () {
  return gulp.src(destination + '/css/*.min.css', {
      read: false
    })
    .pipe(plugins.clean())
    .on('end', function () {
      plugins.util.log(plugins.util.colors.yellow('♠ La suppressions des fichiers *.min.css est terminée ♠'));
      return gulp.src(destination + '/css/*.css')
        .pipe(plugins.csso())
        .pipe(plugins.rename({
          suffix: '.min'
        }))
        .pipe(gulp.dest(destination + '/css/'))
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
  return gulp.src(source + '/js/*.js')
    .pipe(gulp.dest(destination + '/js'))
    .on('end', function () {
      plugins.util.log(plugins.util.colors.bgGreen.white.bold('♠ Fichiers JavaScript copiés dans le dossier de prod avec succès ♠'));
    });
});

// Tâche "build"
gulp.task('build', ['css']);

// Tâche "prod" = minify
gulp.task('prod', ['minify']);

// Tâche "watch" = je surveille *scss
gulp.task('watch', function () {
  gulp.watch(source + '/sass/*.scss', ['build']);
  gulp.watch(source + '/js/*.js', ['javascript']);
});

// Tâche par défaut
gulp.task('default', ['watch']);