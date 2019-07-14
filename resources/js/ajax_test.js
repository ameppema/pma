document.querySelector('#load_data').addEventListener('click', load_data);

function load_data(){
  var http_request;
  http_request = new XMLHTTPRequest();
  http_request.onreadystatechange = function(){
    if(this.readystate == 4 && this.status == 400){
      console.log(this.responseText);
    }
  };
  http_request.open("POST", "json_test.json");
  http_request.withCredentials = true;
  http_request.setRequestHeader("Content-Type", "application/json");
  http_request.send({ 'request': "authentication token" });
}
