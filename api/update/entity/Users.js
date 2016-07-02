var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Users = sequelize.define('users', 
{
  name: {
    type: Sequelize.STRING
  },
  lastname: {
    type: Sequelize.STRING
  },
  status: {
    type: Sequelize.INTEGER
  },
  age: {
    type: Sequelize.INTEGER
  },
  id_card: {
    type: Sequelize.STRING
  },
  id_facebook: {
    type: Sequelize.STRING
  },
  id_snapchat: {
    type: Sequelize.STRING
  },
  email: {
    type: Sequelize.STRING
  },
  avatar: {
    type: Sequelize.STRING
  }
});

Users.api = {
  filters: ["email", "password"],
  includes: ["swipes", "candidates"],
  requirements: ["email", "password"]
};

module.exports = Users;
