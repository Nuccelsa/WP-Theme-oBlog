// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'app.js'},
  stylesheets: {
      joinTo: {
         'css/app.css': /^app/,
         'css/vendors.css': /^node_modules/
      }
  }
};

exports.plugins = {

    // Je déclare à sass-brunch que il existe un autre dossier dans lequel chercher des fichiers .scss
    sass: {
      options: {
        includePaths: ['node_modules/font-awesome/scss']
      }
    },

    // Je demande à browserSync de prendre en compte tous les fichiers
    browserSync: {
      'files': [
        '*'
      ]
    },

    // Copycat va me créer un dossier fonts dans public et déposer les fichiers de fonts présent dans node_modules/font-awesome
    copycat: {
        'fonts': ['node_modules/font-awesome/fonts']
    }
};

exports.npm = {
    // J'ajoute mon normalize dans mon css généré
    styles: {
        'normalize.css': ['normalize.css']
    }
};
