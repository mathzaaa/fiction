<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex, nofollow" />
    <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/dashboard.css">
   <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/register.css">
    <link rel="stylesheet" href="<?PHP echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">


    <title><?PHP echo $title; ?></title>
    <style>
    body {
        background-color: white;
    }

    #loginbox {
        margin-top: 30px;
    }

    #loginbox > div:first-child {
        padding-bottom: 10px;
    }

    .iconmelon {
        display: block;
        margin: auto;
    }

    #form > div {
        margin-bottom: 25px;
    }

    #form > div:last-child {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .panel {
        background-color: transparent;
    }

    .panel-body {
        padding-top: 30px;
        background-color: rgba(2555,255,255,.3);
    }

    #particles {
        width: 100%;
        height: 100%;
        overflow: hidden;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        z-index: -2;
    }

    .iconmelon,
    .im {
      position: relative;
      width: 150px;
      height: 150px;
      display: block;
      fill: #525151;
    }

    .iconmelon:after,
    .im:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .btn-file {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <?PHP
			$data['title'] = $title;
			$this->load->view ('ticket/left_menu',$data);
		?>




        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

  <form action="<?PHP echo base_url();?>/ticket/save_edit_member" method="POST" enctype="multipart/form-data" onsubmit="$('#loading').show();">

  <div class="container">
    <h1><?PHP echo $title; ?></h1>

    <label for="email"><b>Username <font color="red">**</font></b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" value="<?PHP echo $edit_member->username; ?>" required>
    <input type="hidden" id="username_old" name="username_old" value="<?PHP echo $edit_member->username; ?>">
    <?PHP if(!empty($_GET['t'])) {?>
      <input type="hidden" id="t" name="t" value="<?PHP echo $_GET['t']; ?>" >

    <?PHP }
     else{ ?>
       <input type="hidden" id="t" name="t" value="<?PHP echo NULL; ?>" >
       <label for="psw"><b>Password <font color="red">**</font></b></label>
       <input type="password" placeholder="Enter Password" id="password" name="password" required>

       <label for="psw-repeat"><b>Repeat Password <font color="red">**</font></b></label>
       <input type="password" placeholder="Repeat Password" id="re_password" name="re_password" required>
    <?PHP } ?>

    <label for="Image"><b>Upload Image</b></label>
    <div>
        <img src="<?PHP echo base_url(); ?>assets/js/kcfinder/upload/member/<?PHP echo $edit_member->img; ?>" width="100px" height="100px">
    </div>
    <div >
      <div class="container">
        <div class="col-md-6">
          <div class="form-group">
          <img id='img-upload'/>
              <div class="input-group">
                  <span class="input-group-btn">
                      <span class="btn btn-default btn-file">
                          Browse… <input type="file" id="featured" name="featured">
                          <input type="hidden" id="img_old" name="img_old" value="<?PHP echo $edit_member->img; ?>">
                          <input type="hidden" id="id_user" name="id_user" value="<?PHP echo $edit_member->id_user; ?>">
                      </span>
                  </span>
                  <input type="text" class="form-control" readonly>
              </div>

          </div>
        </div>
        </div>
    </div>

    <label for="email"><b>NAME <font color="red">**</font></b></label>
    <div>
      <input type="text" placeholder="Name" name="name" style="width:45%" value="<?PHP echo $edit_member->name; ?>" required>
       <input type="text" placeholder="Last Name" name="lname" style="width:45%" value="<?PHP echo $edit_member->lname; ?>" required>
    </div>



    <label for="email"><b>Email <font color="red">**</font></b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" value="<?PHP echo $edit_member->email; ?>" required>
    <input type="hidden" id="email_old" name="email_old" value="<?PHP echo $edit_member->email; ?>">

    <label for="major"><b>Major <font color="red">**</font></b></label>
    <p>
    <select id="major" name="major" class="custom-select" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
      <option value="">---Major---</option>
      <?PHP foreach ( $select_major as $row ): ?>
      <option value="<?PHP echo $row->id_major."/".$row->name_major; ?>" <?PHP if($edit_member->id_major == $row->id_major){echo "selected";} ?>><?PHP echo $row->name_major; ?></option>
      <?php endforeach; ?>
    </select>
    </p>

      <label for="department"><b>Department <font color="red">**</font></b></label>
      <p>
      <select id="department" name="department" class="custom-select" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
        <option value="">---Department---</option>
        <?PHP foreach ( $select_department as $row ): ?>
        <option value="<?PHP echo $row->id_department; ?>" <?PHP if($edit_member->id_department == $row->id_department){echo "selected";} ?>><?PHP echo $row->name_department; ?></option>
        <?php endforeach; ?>
        </select>
      </p>
    </label>

    <?PHP if(!empty($_GET['t'])) {?>
    <label for="status_user"><b>STATUS </b></label>
    <p>
    <select id="status_user" name="status_user" class="custom-select" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
      <option value="">---STATUS---</option>
      <option value="USER" <?PHP if($edit_member->status_user == "USER"){echo "selected";} ?>>USER</option>
      <option value="HEAD DEPARTMENT" <?PHP if($edit_member->status_user == "HEAD DEPARTMENT"){echo "selected";} ?>>HEAD DEPARTMENT</option>
      <option value="ADMIN" <?PHP if($edit_member->status_user == "ADMIN"){echo "selected";} ?>>ADMIN</option>
      </select>
    </p>
  </label>

    <label for="status_user"><b>STATUS MAIL </b></label>
    <p>
    <select id="status_mail" name="status_mail" class="custom-select" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
      <option value="">---STATUS MAIL---</option>
      <option value="1" <?PHP if($edit_member->status_mail == 1){echo "selected";} ?>>Active</option>
      <option value="0" <?PHP if($edit_member->status_mail == 0){echo "selected";} ?>>Non Active</option>
      </select>
    </p>
  </label>

    <label for="status_user"><b>STATUS ACTIVE </b></label>
    <p>
    <select id="status_appoval" name="status_appoval" class="custom-select" style="box-shadow: 0px 0px 25px 0px rgba(50, 50, 50, .5)">
      <option value="">---STATUS ACTIVE---</option>
      <option value="1" <?PHP if($edit_member->status_appoval == 1){echo "selected";} ?>>Active</option>
      <option value="0" <?PHP if($edit_member->status_appoval == 0){echo "selected";} ?>>Non Active</option>
      </select>
    </p>
  </label>

    <?PHP }
    else{?>
      <input type="hidden" id="t" name="status_user" value="<?PHP echo $edit_member->status_user; ?>" >
      <input type="hidden" id="t" name="status_mail" value="<?PHP echo $edit_member->status_mail; ?>" >
      <input type="hidden" id="t" name="status_appoval" value="<?PHP echo $edit_member->status_appoval; ?>" >

    <?PHP } ?>

    <label>
      <input type="checkbox" name="remember" required style="margin-bottom:15px"> Confirm For Information Change
    </label>

    <div class="clearfix">
      <button type="button" id="btn_cancle" class="cancelbtn">Cancel</button>
      <button type="submit" id="btn_add" class="signupbtn">Edit</button>
    </div>
  </div>
</form>

<div id="loading" style="display:none; position: fixed; top: 40%; left: 50%;" align="center" width="100%"><br>
<IMG SRC="<?PHP echo base_url(); ?>assets/img/loading.gif" id="loading" WIDTH="150px" HEIGHT="150px" BORDER="0" ALT=""><br>
กรุณารอสักครู่...</div>



     <div id="particles"></div>

			<div id="show"></div>
        </main>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?PHP echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?PHP echo base_url();?>/assets/js/bootstrap.min.js" ></script>

	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>

  <script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#featured").change(function(){
		    readURL(this);
		});
	});
</script>
	<script>
		$(document).ready(function() {


			$("#btn_cancle").click(function(){
          window.location.href="<?php echo base_url('ticket/index'); ?>";
      });

	});

	</script>
  <script>
  !function(a){function b(b,d){function e(){if(w){$canvas=a('<canvas class="pg-canvas"></canvas>'),v.prepend($canvas),p=$canvas[0],q=p.getContext("2d"),f();for(var b=Math.round(p.width*p.height/d.density),c=0;b>c;c++){var e=new l;e.setStackPos(c),x.push(e)}a(window).on("resize",function(){h()}),a(document).on("mousemove",function(a){y=a.pageX,z=a.pageY}),B&&!A&&window.addEventListener("deviceorientation",function(){D=Math.min(Math.max(-event.beta,-30),30),C=Math.min(Math.max(-event.gamma,-30),30)},!0),g(),o("onInit")}}function f(){p.width=v.width(),p.height=v.height(),q.fillStyle=d.dotColor,q.strokeStyle=d.lineColor,q.lineWidth=d.lineWidth}function g(){if(w){s=a(window).width(),t=a(window).height(),q.clearRect(0,0,p.width,p.height);for(var b=0;b<x.length;b++)x[b].updatePosition();for(var b=0;b<x.length;b++)x[b].draw();E||(r=requestAnimationFrame(g))}}function h(){for(f(),i=x.length-1;i>=0;i--)(x[i].position.x>v.width()||x[i].position.y>v.height())&&x.splice(i,1);var a=Math.round(p.width*p.height/d.density);if(a>x.length)for(;a>x.length;){var b=new l;x.push(b)}else a<x.length&&x.splice(a);for(i=x.length-1;i>=0;i--)x[i].setStackPos(i)}function j(){E=!0}function k(){E=!1,g()}function l(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*p.width),y:Math.ceil(Math.random()*p.height)},this.speed={},d.directionX){case"left":this.speed.x=+(-d.maxSpeedX+Math.random()*d.maxSpeedX-d.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*d.maxSpeedX+d.minSpeedX).toFixed(2);break;default:this.speed.x=+(-d.maxSpeedX/2+Math.random()*d.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?d.minSpeedX:-d.minSpeedX}switch(d.directionY){case"up":this.speed.y=+(-d.maxSpeedY+Math.random()*d.maxSpeedY-d.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*d.maxSpeedY+d.minSpeedY).toFixed(2);break;default:this.speed.y=+(-d.maxSpeedY/2+Math.random()*d.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?d.minSpeedY:-d.minSpeedY}}function m(a,b){return b?void(d[a]=b):d[a]}function n(){v.find(".pg-canvas").remove(),o("onDestroy"),v.removeData("plugin_"+c)}function o(a){void 0!==d[a]&&d[a].call(u)}var p,q,r,s,t,u=b,v=a(b),w=!!document.createElement("canvas").getContext,x=[],y=0,z=0,A=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),B=!!window.DeviceOrientationEvent,C=0,D=0,E=!1;return d=a.extend({},a.fn[c].defaults,d),l.prototype.draw=function(){q.beginPath(),q.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,d.particleRadius/2,0,2*Math.PI,!0),q.closePath(),q.fill(),q.beginPath();for(var a=x.length-1;a>this.stackPos;a--){var b=x[a],c=this.position.x-b.position.x,e=this.position.y-b.position.y,f=Math.sqrt(c*c+e*e).toFixed(2);f<d.proximity&&(q.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),d.curvedLines?q.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):q.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}q.stroke(),q.closePath()},l.prototype.updatePosition=function(){if(d.parallax){if(B&&!A){var a=(s-0)/60;pointerX=(C- -30)*a+0;var b=(t-0)/60;pointerY=(D- -30)*b+0}else pointerX=y,pointerY=z;this.parallaxTargX=(pointerX-s/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(pointerY-t/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}switch(d.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=v.width()-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>v.width()&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>v.width()||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(d.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=v.height()-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>v.height()&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>v.height()||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},l.prototype.setStackPos=function(a){this.stackPos=a},e(),{option:m,destroy:n,start:k,pause:j}}var c="particleground";a.fn[c]=function(d){if("string"==typeof arguments[0]){var e,f=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){a.data(this,"plugin_"+c)&&"function"==typeof a.data(this,"plugin_"+c)[f]&&(e=a.data(this,"plugin_"+c)[f].apply(this,g))}),void 0!==e?e:this}return"object"!=typeof d&&d?void 0:this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})},a.fn[c].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}}}(jQuery),/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();

$(function(){

    $('#particles').particleground({
        minSpeedX: 0.1,
        maxSpeedX: 0.7,
        minSpeedY: 0.1,
        maxSpeedY: 0.7,
        directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges
        directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
        density: 10000, // How many particles will be generated: one particle every n pixels
        dotColor: '#eee',
        lineColor: '#eee',
        particleRadius: 7, // Dot size
        lineWidth: 1,
        curvedLines: true,
        proximity: 100, // How close two dots need to be before they join
        parallax: false
    });

});
  </script>

  </body>
</html>
