var restify = require('restify');
var controllers = require('./src/controllers');

var server = restify.createServer();
server.use(restify.acceptParser(server.acceptable));
server.use(restify.queryParser());
server.use(restify.bodyParser());

var entryPoint = "/api/1/";

server.get('/users', controllers.users.getCollection);
server.get('/users/:id', controllers.users.getItem);
server.post('/users', controllers.users.postItem);

server.get('/swipes', controllers.swipes.getCollection);
server.get('/swipes/:id', controllers.swipes.getItem);
server.post('/swipes', controllers.swipes.postItem);

server.get('/candidates', controllers.candidates.getCollection);
server.get('/candidates/:id', controllers.candidates.getItem);
server.post('/candidates', controllers.candidates.postItem);

server.get('/payments', controllers.payments.getCollection);
server.get('/payments/:id', controllers.payments.getItem);
server.post('/payments', controllers.payments.postItem);

server.listen(8080, function() {
  console.log('%s listening at %s', server.name, server.url);
});
