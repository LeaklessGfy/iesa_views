var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Candidates = sequelize.define('candidates', {
  userId: {
    type: Sequelize.INTEGER,
    references: { model: "Users", key: "id" }
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

Candidates.api = {
  filters: null,
  includes: ["users"],
  requirements: ["description"]
};

module.exports = Candidates;
