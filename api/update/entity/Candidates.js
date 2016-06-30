var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Candidates = sequelize.define('candidates', {
  user_id: {
    type: Sequelize.STRING,
  },
  number: {
    type: Sequelize.INTEGER
  },
  hype: {
    type: Sequelize.INTEGER
  },
  description: {
    type: Sequelize.TEXT
  }
});

module.exports = Candidates;
