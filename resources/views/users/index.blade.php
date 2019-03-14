<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
body {
    margin:0;
    padding:0;
    background:#292929;
}
.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
input[type="checkbox"] {
    position: relative;
    width: 240px;
    height: 80px;
    -webkit-appearance: none;
    background: linear-gradient(0deg, #333, #000);
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 0 4px #353535, 0 0 0 5px #353535, 
                inset 0 0 10px rgba(0,0,0,1), 0 5px 20px rgba(0,0,0,.5),
                inset 0 0 15px rgba(0,0,0,.2);
}
input:checked[type="checkbox"] {
    background: linear-gradient(0deg, #6dd1ff, #20b7ff);
    box-shadow: 0 0 2px #6dd1ff, 0 0 0 4px #353535, 0 0 0 5px #353535, 
                inset 0 0 10px rgba(0,0,0,1), 0 5px 20px rgba(0,0,0,.5),
                inset 0 0 15px rgba(0,0,0,.2);
}
input[type="checkbox"]:before {
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 160px;
    height: 80px;
    background: linear-gradient(0deg, #000, #6b6b6b);
    border-radius: 40px;
    box-shadow: 0 0 0 1px #232323;
    transform: scale(.98,.96);
    transition: .5s;
}
input:checked[type="checkbox"]:before {
    left: 80px;
}
input[type="checkbox"]:after {
    content:'';
    position: absolute;
    top: calc(50% - 2px);
    left: 130px;
    width: 8px;
    height: 8px;
    background: linear-gradient(0deg, #6b6b6b, #000);
    border-radius: 50%;
    transition: .5s;
}
input:checked[type="checkbox"]:after {
    background: #63cdff;
    left: 210px;
    box-shadow: 0 0 5px #13b3ff, 0 0 15px #13b3ff;
}

</style>

<script>
    $(document).ready(function() {
        function getData() {
            $.ajax({
              url: "/botao/ajax",
              cache: false,
              success:function(d){
                //var json = JSON.parse(d);
                if(d["result"][0]["botao"] == 0){
                    // console.log("desligado");
                    $('#botao').prop("checked", false);
                }else{
                    // console.log("ligado");
                    $('#botao').prop("checked", true);
                }
              },
              complete: function(){
                   setTimeout(getData, 500);
              }
            });
        }
        getData();
    });    
    
    function displayNote() {
        //console.log("foi");
        $.ajax({
            url:"/ajax/register/",
            success: function(d){
                //console.log(d);
            }
        });
    }
</script>

<div class="center">
	<input type="checkbox" id="botao" onClick="displayNote()"> 
</div>
