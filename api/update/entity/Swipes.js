var Sequelize = require('sequelize'); 
var sequelize = require('./../src/sequelize');

var Swipes = sequelize.define('swipes', {
	userId: {
		type: Sequelize.INTEGER,
		references: { model: "Users", key: "id" }
	},
	candidateId: {
		type: Sequelize.INTEGER,
		references: { model: "Candidates", key: "id" }
	}
});

Swipes.api = {
  filters: ["userId", "candidateId"],
  includes: ["users", "candidates"],
  excludFields: null,
  requirements: ["userId", "candidateId"]
};

module.exports = Swipes;