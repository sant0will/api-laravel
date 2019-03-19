<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<html>
<head>
    <title>Botoes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<style>
/*Inspiration from: Tomas Jasovsky (https://dribbble.com/shots/756012-Spicy-navbar 

P.S: Eeedback appreciated :)*/

*{
  transition: all .2s ease;
}
body{
  background: #383A43;
 background: -webkit-radial-gradient(center center, circle cover, #42444c,#383A43,#2E3037); /* Safari 5.1 to 6.0 */
 background: -o-radial-gradient(center center, circle cover, #42444c,#383A43,#2E3037); /* For Opera 11.6 to 12.0 */
 background: -moz-radial-gradient(center center, circle cover,#42444c,#383A43,#2E3037); /* For Firefox 3.6 to 15 */
 background: radial-gradient(center center, circle cover,#42444c,#383A43,#2E3037);

}
.twitter
{
  font-size: 80px;
  padding-top:100px;
  color:#1da1f2;
  text-shadow: 0px 0px 10px #1da1f2;
}
.face
{
  font-size: 80px;
  padding-top:100px;
  color:#3b5998;
  text-shadow: 0px 0px 10px #3b5998;
}
.insta
{
  font-size: 80px;
  padding-top:100px;
  color:#795a80;
  text-shadow: 0px 0px 10px #800080;
}
.tweet {
  margin-top: 100px;
}
.list {
    color: #fff;
    list-style: none;
    padding-left: 0px;
    display:block;
}
.list> li{
    padding:20px 30px;
    display:inline;
    font-size:28px;
    margin:-1px;
    color:#2E3037;
    background: linear-gradient(#5d606d,#2b2d33);
    box-shadow: 0px 0px 2px 2px #2E3037;
}
.list> li:first-of-type
{
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;

}
.list> li:last-of-type
{
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.list>li:hover {
    color:green;
    text-shadow: 2px 2px 10px #0ba069;
    background: linear-gradient(#383A43,#151619);
    border:1px solid #424448;
   box-shadow: 0px 0px 10px 3px #151619;

    padding:22px 30px;
    cursor:pointer;
}
.list>li:active
{
  background:linear-gradient(#2c2e38,#060708);
  padding:20px 30px;
}

</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="outer-div text-center">
                <h1 id="twitter"><i class="fa fa-twitter twitter" aria-hidden="true"></i></h1>
                <h1 id="face"><i class="fa fa-facebook face" aria-hidden="true"></i></h1>
                <h1 id="insta"><i class="fa fa-instagram insta" aria-hidden="true"></i></h1>
                <div class="col-md-12 tweet">
                    <ul class="list">
                        <li onclick="cadastrar(1)"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li onclick="cadastrar(0)"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li onclick="cadastrar(2)"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

  $(document).ready(function() {
    function getData() {
        $.ajax({
          url: "/botoes/ajax",
          cache: false,
          success:function(d){
            if(d["result"][0]["botao"] == 0){
              $('#twitter').fadeIn();
              $('#face').hide();
              $('#insta').hide();
            }else if(d["result"][0]["botao"] == 1){
              $('#face').fadeIn();
              $('#twitter').hide();
              $('#insta').hide();
            }else{
              $('#insta').fadeIn();
              $('#face').hide();
              $('#twitter').hide();
            }
          },
          complete: function(){
                setTimeout(getData, 500);
          }
        });
    }
    getData();
    });  

    function cadastrar(id) {
        console.log(id);
        $.ajax({
            url:"/ajax/"+id+"/registerBotoes/",
            success: function(d){
                //console.log(d);
            }
        });
    }

</script>
</html>
