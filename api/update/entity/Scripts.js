var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Scripts = sequelize.define('scripts', {
  title: {
    type: Sequelize.STRING
  },
  description: {
    type: Sequelize.TEXT
  },
  hype: {
    type: Sequelize.INTEGER
  }
});

Scripts.api = {
  filters: null,
  includes: null,
  excludFields: null
};

module.exports = Scripts;
