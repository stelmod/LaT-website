var gulp = require('gulp');
var ftp = require('vinyl-ftp');
var git = require('gulp-git');
var shell = require('gulp-shell');
var watch = require('gulp-watch');
var rename = require("gulp-rename");

gulp.task('deploy-live', function () {
    var conn = ftp.create({
        host: process.env.FTP_HOST,
        user: process.env.FTP_USERNAME,
        password: process.env.FTP_PASSWORD,
        parallel: 10
    });

    return gulp.src(['themes/**/*'], {base: '.', buffer: false})
        .pipe(conn.dest('/htdocs/wp-content'));
});

gulp.task('default', function () {
    // place code for your default task here
});

gulp.task('init-wp', function(){
  git.clone('https://github.com/Varying-Vagrant-Vagrants/VVV.git', function (err) {
    if (err) throw err;
  });
});

gulp.task('run',
   shell.task([
      'cd VVV && vagrant up'
]));

gulp.task('stop',
   shell.task([
      'cd VVV && vagrant halt'
]));

gulp.task('deploy-vm', function() {
   return gulp.src('./themes/**/*')
       .pipe(gulp.dest('./VVV/www/wordpress-default/public_html/wp-content/themes'));
});

gulp.task('stream', function () {
    return watch(['themes/**/*.*'], function() {
      gulp.start('deploy-vm')
    });
});

