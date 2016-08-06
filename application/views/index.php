<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>


<style>
body{
    padding-top:0;
}
.clearfix:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
     }
.clearfix { display: inline-block; }
/* start commented backslash hack \*/
* html .clearfix { height: 1%; }
.clearfix { display: block; }
/* close commented backslash hack */
.tree{
	overflow-x:auto;
	min-width: 5000px;
	background: white;
}
.custom-area{
	
	width: 100% !important;
	height: 470px;
	overflow: scroll;
}

.droparea{
	position: relative;
}
body{
	background: white;
}
.circledot {
    position: absolute;
    width: 13px;
    height: 13px;
    background: #FFF;
    border-radius: 50%;
    bottom: -8px;
    left: 50%;
    border: 1px solid #000;
   }

.circledot2{
	position: absolute;
    width: 13px;
    height: 13px;
    background: #FFF;
    border-radius: 50%;
    top: -8px;
    left: 50%;
    border: 1px solid #000;
}


.circledot2:hover{

		background: #F70313 !important;
}  

 .circledot:hover{

 		background: #2CF734 !important;
 }  

.margindivmsg{
    margin-top: 100px;

}

.margindivdelay{
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: 100px;
}

.margindivaction{
    margin-left: 80px;
}
body{
    background: #f5f5f5;
}
footer{
    display: none;
}

.customendpoint{
    z-index: 999;
}


.customendpoint svg circle{
  r:5!important;
  
}



.messagebox{
    border: 1px solid#ddd;
    position: relative;
    color: black;
    margin-left: -15px;
    margin-right: 4px; 
    background: white!important; 
    height: 85px; 
    width: 270px;
}

.actionboxed{

    border: 1px solid#ddd; 
    position: relative;
    color: black; 
    margin-left: 4px; 
    margin-right: 4px; 
    background: white!important; 
    height: 62px; 
    width: 105px;

}

.delaybox{
    border: 1px solid#ddd !important; 
    border-radius: 50%;
    position: relative !important;
    color: black !important; 
    margin-left: 4px !important; 
    margin-right: 4px !important; 
    background: white !important; 
    height: 62px !important; 
    width: 65px !important;

}

#maincontainerid{
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAHElEQVQIW2P88OHDfwYcgBEkKSAgwIhNftBJAgBDnBvX7maggAAAAABJRU5ErkJggg==) repeat;
position:relative;
height: 2000px; 
width:2000px;

}

.actionboxtext{
    font-weight: bold; 
    font-size: 1.2em; 
    line-height: 1.2; 
    margin-left: 5px; 
    margin-top: 20px;
}

.messageboxtext{
    font-weight: bold;
    font-size: 30px;
    text-align: center;
    line-height: 14px;
    margin-left: 60px;
    margin-top: -25px;
    margin-bottom: 2px;
}

.items .messagebox{

    width:270px;
    height: 62px !important;

}

.funnelbox{
    height:100%;
    border:1px dashed #000;
    position:fixed;
    background:#fff;
    width:300px;
    top:60px;
    right:0;

}

.messageimage{
    width: 60px;
    height: 60px; 
    margin-left: -15px;
}

.delayimage{

    font-size: 50px !important;
    margin-top: 5px !important;

}

.actionboxappend{
    position: absolute;
    top: -20px;
    right: -40px;
    margin-right: 10px;

}

.startboxmessage{
position: absolute;
left:400px !important;
top:80px !important;
border: 1px solid#ddd;
color: black;
background: white!important;
}

.subtitletext{

    font-size: 10px;
    margin-left: 60px;
    margin-top: 0px;
    word-break: break-word;
}

.savebutton{
     position: fixed;
     bottom: 0; 
     right:0;
     width: 300px;
     text-align: center;
     margin-bottom: 20px;
}


</style>

</head>
<body>
<nav class="navbar navbar-default navbar-color">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="item" id="funnel"><a href=""><span class="nav-list"><i class="fa fa-dashboard"></i> Flowchart Builder</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main-content-body maincontentbody" id="maincontainerid">

        <div class="preview addeditem" data-type="message" id="message0" style="position: absolute;top:100px;left:350px">
            <div class="row messagebox">
                <div class="col-md-2 col-xs-3 col-lg-3" style="padding: 0 width:10px;">
                    <img id="notification-preview-img" src="<?php echo base_url();?>assets/img/test4.jpg" class="messageimage">
                </div>
                <div class="col-md-10 notification-demo-wrapper">
                    <p class="notification-title messageboxtext">
                          Start                                       </p>
                        
                </div>
            </div>
        </div>        

</div>
	<div class="col-md-3 funnelbox">
		<div class="col-md-12 items">
			
			<div class="preview dragitem margindivmsg" data-type="message">
                <div class="row messagebox">
                    <div class="col-md-2 col-xs-3 col-lg-3" style="padding: 0 width:10px;">
                        <img id="notification-preview-img" src="<?php echo base_url();?>assets/img/test4.jpg" class="messageimage">
                    </div>
                    <div class="col-md-10 notification-demo-wrapper">
                        <p class="notification-title messageboxtext">
                          ABCD                                       </p>
                        
                    </div>
                </div>

        	</div>



			<div class="preview dragitem margindivdelay" data-type="delay">
                <div class="row delaybox">
                    <div class="col-md-2 col-xs-3 col-lg-3" style="padding: 0 width:10px;">
                       <i class="fa fa-question delayimage" id="notification-preview-clock"  aria-hidden="true"></i>
                    </div>
                    
                </div>
        	</div>



			<div class="preview dragitem margindivaction" data-type="action">
                <div class="row actionboxed">
                    <div class="col-md-7 notification-demo-wrapper">
                        <p class="notification-title actionboxtext">
                              Action                                       </p>
                    </div>
                </div>
        	</div>
		</div>

	</div>
</div>
</body>
<?php include('scripts.php'); ?>

<script type="text/javascript">


$(document).ready(function(){
	var msg=1;
	var action=0;
	var delay=0;
    var conarr = {};
    
    
    var posarray = {};
    var temppos={};
    allelements = [];

 	$(".dragitem").draggable({
 		helper: 'clone',
 		cursor: 'hand'

	});

    $("#message0").draggable({ containment: 'parent',
                        grid: [1,1]});

    $("#message0").append('<div class="actionboxappend"></div>');

    allelements.push("message0"); 

    jsPlumb.ready(function(){
         jsPlumb.addEndpoint( "message0", { 
                            uuid:"message0_Bottom",
                            connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
                            connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
                            endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },
                            anchor:["Bottom"],
                            cssClass:"customendpoint",
                            endpoint:"Dot",
                            isSource:true,
                            isTarget:true
                            }); 
    jsPlumb.draggable("message0");
    });

 	var droparea=$(".main-content-body").droppable({
        accept: ".dragitem",
        drop: function(ev, ui)
        {
            if(ev.pageX > $(window).width() - $(".funnelbox").width()){

                return;
            }
        	var clone = $(ui.draggable).clone();
			clone.css("position", "absolute"); 
			var position = $(this).position();
			clone.css("top", ev.pageY);
			clone.css("left", ev.pageX); 
			$(this).append(clone);
            clone.addClass("addeditem");
            clone.removeClass("ui-draggable dragitem margindivmsg margindivdelay margindivaction");
            $(".addeditem").draggable({
                containment: 'parent',
                grid: [1,1]
            });
            clonetype=clone.attr("data-type");
            if(clonetype=="message"){
            	var newid=clonetype+msg;
                allelements.push(newid);
            	msg++;
            }else if(clonetype=="delay"){
            	newid=clonetype+delay;
                allelements.push(newid);
            	delay++;
            } else if(clonetype=="action"){
            	newid=clonetype+action;
                allelements.push(newid);
            	action++;
            }
            clone.attr("id",newid);
       		
            jsPlumb.ready(function(){

                jsPlumb.setContainer("maincontainerid");
                
                var common = {
                isSource:true,
                isTarget:true

                };


                if(clonetype == "message"){
                   
                    var msg = jsPlumb.addEndpoint( newid, { 
        	          uuid: newid +"_Bottom",
                      connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },
        	          anchor:["Bottom"],
                      cssClass:"customendpoint",
                      endpoint:"Dot"
        	        }, common); 

                    if(newid!="msg0connection"){  
                    jsPlumb.addEndpoint( newid, {
                    uuid: newid +"_Top", 
                    connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
                    connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
                    endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },
                    anchor:["Top"],
                    cssClass:"customendpoint",
                    endpoint:"Dot"
                    }, common); 
                    }
                     
        	    }
        	    
                else if(clonetype == "delay"){
                      var delay =jsPlumb.addEndpoint(newid, { 
                      uuid: newid +"_Top",
        	          connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },	
        	          cssClass:"customendpoint",
                      endpoint:"Dot",
                      anchor:["Top"]
        	        }, common); 

        	    	jsPlumb.addEndpoint(newid, { 
                      uuid: newid +"_Bottom",
        	    	  connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },
        	          anchor:["Bottom"],
                      cssClass:"customendpoint",
                      endpoint:"Dot"
        	        }, common); 
        	    
                    // delay.addClass(tmpid + "connection");
        	    }

        	    else if(clonetype == "action"){
                    var act =jsPlumb.addEndpoint(newid, {
                      uuid: newid +"_Right", 
        	          connectorStyle:{ strokeStyle:"#5cb85c", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#5cb85c", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#5cb85c", outlineColor:"#5cb85c" },
        	          anchor:["Right"],
                      cssClass:"customendpoint",
                      endpoint:"Dot"
        	        }, common);

        	        jsPlumb.addEndpoint(newid, {
                      uuid: newid +"_Left", 
        	          connectorStyle:{ strokeStyle:"#c9302c", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#c9302c", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#c9302c", outlineColor:"#c9302c" },
        	          anchor:["Left"],
                      cssClass:"customendpoint",
                      endpoint:"Dot"
        	        }, common);
                
                    jsPlumb.addEndpoint(newid, { 
                      uuid: newid +"_Top",
        	          connectorStyle:{ strokeStyle:"#3498DB", lineWidth:4 },
            		  connectorHoverStyle:{strokeStyle:"#3498DB", lineWidth:6 },
        	          endpointStyle:{ fillStyle:"#3498DB", outlineColor:"#3498DB" },
        	          anchor:["Top"],
                      cssClass:"customendpoint",
                      endpoint:"Dot"
        	        }, common); 
        	       
                   
            	}

            jsPlumb.draggable(clone);

            });
		
        if(clonetype=="message"){
                clone.append('<div class="actionboxappend"><i class="fa fa-trash delete" aria-hidden="true"></i></div>');
        }else if(clonetype=="delay"){
                clone.append('<div class="actionboxappend"><i class="fa fa-trash delete" aria-hidden="true"></i></div>');

        } else if(clonetype=="action"){
                clone.append('<div class="actionboxappend"><i class="fa fa-trash delete" aria-hidden="true" style="margin-right: 10px;"></i></div>');


        }
       

        }

    }).on('scroll',function(){
        droparea.scrollTop($(this).scrollTop());
    });

  
    jsPlumb.bind("dblclick",function(conn,event){
        
        sourcex = conn.endpoints[0].anchor.x;
        sourcey= conn.endpoints[0].anchor.y;

        
        var sourcedot;
        
        if(sourcex == 0.5 && sourcey == 0){
            sourcedot = "Top";
        }
        else if(sourcex == 0.5 && sourcey == 1){
            sourcedot = "Bottom";
        }
        else if(sourcex == 0 && sourcey == 0.5){
            sourcedot = "Left";
        }
        else if(sourcex == 1 && sourcey == 0.5){
            sourcedot = "Right";
        }
        
        var index = conn.sourceId + "_" + sourcedot;
        delete conarr[index];
        
        jsPlumb.detach(conn);
        console.log(conarr);
        
    });

    $(".main-content-body").on('click','.delete',function(){
        var ths=$(this);
        var thsid=$(this).closest(".addeditem").attr("id");
        $(this).closest(".addeditem + div").remove();
        $(this).closest(".addeditem").remove();
        jsPlumb.detach("#"+thsid);
        $("."+thsid+"connection").remove();

        jsPlumb.detachAllConnections(thsid);
        jsPlumb.removeAllEndpoints(thsid); 

        allelements.forEach(function(item,index){
           if(item == thsid){
                delete allelements[index];

            }
        });
        
        delete posarray[thsid];
        
    });

    jsPlumb.bind('connection',function(info,ev){
    sourcex = info.connection.endpoints[0].anchor.x;
    sourcey= info.connection.endpoints[0].anchor.y;

    destinationx = info.connection.endpoints[1].anchor.x;
    destinationy = info.connection.endpoints[1].anchor.y;
    

    var sourcedot;
    var destinationdot;

    if(sourcex == 0.5 && sourcey == 0){
        sourcedot = "Top";
    }
    else if(sourcex == 0.5 && sourcey == 1){
        sourcedot = "Bottom";
    }
    else if(sourcex == 0 && sourcey == 0.5){
        sourcedot = "Left";
    }
    else if(sourcex == 1 && sourcey == 0.5){
        sourcedot = "Right";
    }


    if(destinationx == 0.5 && destinationy == 0){
        destinationdot = "Top";
    }
    else if(destinationx == 0.5 && destinationy == 1){
        destinationdot = "Bottom";
    }
    else if(destinationx == 0 && destinationy == 0.5){
        destinationdot = "Left";
    }
    else if(destinationx == 1 && destinationy == 0.5){
        destinationdot = "Right";
    }


    if(sourcedot==destinationdot){
      jsPlumb.detach(info.connection);
      
    }  /*Top-Top Bott-Bott left-left right-right not allwed*/

    else if(info.source.id == info.target.id){
        jsPlumb.detach(info.connection);  
        
    }      /*same element connection not allwed*/

   
    else{
        conarr[info.source.id +"_"+ sourcedot]= info.target.id +"_"+destinationdot;
        
    }

    });

});

</script>


</html>





