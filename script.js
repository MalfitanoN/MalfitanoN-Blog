//all the activatting of the functions
$("document").ready(function(){
    
    //main box that is blue
    $(".Main").css("background-color", "blue");
    
    //border for the blue box
    $("div:nth-child(1)").css("border-style", "solid");
    
    //when you hover over the h1 it changes text
    $("h1").bind("mouseover", mouseOverMe).bind("mouseout", mouseOutMe);
    
    //when you click on the h1
    $("h1").bind("click", mouseClick);
    
    //replaces h1 text
    $("#replaceWText").bind("click", replaceWText);
    
    //adds another paragraph text
    $("#randPara").bind("click", addAPara);
    
    //subtracts anoother paragraph text
    $("#removePara").bind("click", removeAPara);
    
    //this is for the nav bar
    $("#tabs").tabs();
    
    //makes the acordion draggable
    $("#accordion").draggable();
    
    //makes the nav bar draggable 
    $("#tabs").draggable();
    
    //makes the page dissapear
    $("#show").css("visibility", "hidden");
    
    //hides the page
    $("#hide").bind("click", hideThePage);
    
    //shows the page
    $("#show").bind("click", showThePage);
    
    //makes the accordian work
    $( "#accordion" ).accordion({
      event: "click hoverintent"
    });
    
 });
 //removes text that you added
 function removeAPara(){
      $("#replaceWText p:last").remove();
 } 
 //addes the text
 function addAPara(){
      $("#replaceWText").append("<p>GET LEDLED</p>");
 } 
 //replaces text
 function replaceWText(){
      $("#replaceWText").text("Wrecked");
 } 
 //when you hover over Wow it changes it and the background
 function mouseOverMe(){
     $("h1").html("LEDL");
     $(".Main").css("background-color", "aqua");
 } 
 //changes  it back to wow when you dont hover over it
 function mouseOutMe(){
     $("h1").html("WOW");
     $(".Main").css("background-color", "blue");
 }
 //when you click ledel it changes all the paragraphs to yea  
 function mouseClick(){
     $("p").html("YEA");
 }
 //when you hide the page the animation out
 function hideThePage(){
     $("#show").css("visibility", "visible");
     $("div").hide("fade", {}, 2500);
     $("#show").show("fade", {}, 2500);
 }
 //when you show the page animation in
 function showThePage(){
     $("div").show("fade", {}, 2500);
     $("#show").hide("fade", {}, 2500);
 }