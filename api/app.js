var restify = require('restify');
var controllers = require('./src/controllers');

var server = restify.createServer();
server.use(restify.acceptParser(server.acceptable));
server.use(restify.queryParser());
server.use(restify.bodyParser());

server.get('/users', controllers.users.getCollection);
server.get('/users/:id', controllers.users.getItem);
server.post('/users', controllers.users.postItem);

server.listen(8080, function() {
  console.log('%s listening at %s', server.name, server.url);
});
