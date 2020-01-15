<style>
body{
    width:100%;
    height:100%;
    margin: 0;
}

/*social media part*/
.social_media{
    width:100%;
    height:30px;
    margin:0;
}
.social_media p{float: right;opacity: .7;margin:5px;}
.social_media img{
    float: left;
    width:30px;
    height:30px;
    opacity: .5;
}
.social_media img:hover{
    opacity: 1;
    background-color: #ddd;
    border-radius: 15px;
}
/* end of social media part*/





.top_line{
    margin:0;
    width:100%;
    height:2px;
    background-color: rgb(255, 7, 7);
}




.space{ 
    width:100%;
    height:10px;
}
.space2{
    width:100%;
    height:50px;
     
}
.menu{
    display: none;
    width:60px;
    height:60px;
    float: right;
    position: -webkit-sticky;
    position: sticky;
    position: fixed;
    right:0;
    top: 0;
    z-index: +20;
  
}
.menu img{
    width:100%;
    height:100%;
}

.header_part{
    height:80px;
    width:100%;
    background-color: rgb(26, 16, 16);
    z-index: +2;
    top:0;
    left:0;
    position: sticky;
    position: -webkit-sticky;
    
}

.header_part img{
   
    width:50px;
    height:50px;
    margin-top: 5px;
    border-radius: 50%;
    border:2px solid forestgreen;
}

.header_part ul{
    width:60%;
    float: right;
    list-style-type: none;
}
.header_part li a{
    text-decoration: none;
    color:#ddd;
    float: left;
    margin-left: 10px;
    font-size: 18px;
}
.header_part li a:hover{
    color: white;
    
}


/* main item info part*/
.main_item_info{
    width: 100%;
    height:450px;
    margin:0;
  
}
.item_photo{
    margin-top: 50px;
    margin-left: 50px;
    float: left;
    width:300px;
    height:300px;
}
.item_photo img{
  
    -webkit-clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);


width:100%;
height:100%;
border-radius: 15px;
}
.item_data{
    background-color: white;
    margin-top: 50px;
    margin-left: 100px;
    float: left;
    width:50%;
    height:300px;
    border:1px solid #ddd;
    border-radius: 15px;
    padding: 10px;
}
.item_data h2{
    margin-left: 10px;
    color: rgb(39, 39, 39);
}
.item_data p{
    margin-left: 10px;
    margin-bottom: 5px;
    color: rgb(39, 39, 39);
}

.item_data button{
    float: right;
    margin-right: 30px;
    width:100px;
    height:35px;
    border:2px solid darkblue;
    border-radius: 10px;
    background-color: white;
    color: darkblue;
}
.item_data button:hover{
    background-color: darkblue;
    color:white;
    cursor: pointer;
}

/* end of main item info part*/

.full_desc{
    width:100%; height:400px; margin:0;
}
.full_desc h2{
    margin-left: 2%;
    color: rgb(39, 39, 39);
} 
.full_desc p{
    
    font-size: 20px;color: rgb(61, 58, 58);
    width:70%; margin-left: 5%;
    height:400px; overflow: hidden;
}


/* related items*/

.items_parent{
    width:100%;
    height:100%;
}
.item_part{
    float: left;
    width:23%;
    height:390px;
    border:1px solid #ddd;
    border-radius: 10px;
    margin:10px;
}
.item_part img{
    width:100%;
    height:60%;
    border-radius: 10px;
    opacity: 0.7;
}
.item_part img:hover{opacity: 1;}
.item_part b{
 font-size: 18px;
 color: darkblue;
 margin-left: 5px;   
}
#price{
    float: right;
    margin-right: 5px;
    margin-top: 5px;
}
#name{
    margin-top: 5px;
    margin-left: 5px;
    color: darkblue;
}
#desc{
    width:100%;
    height:70px;
    overflow: hidden;
}
#btn_detail{
    float: right;
    background-color: darkblue;
    color: white;
    width:100px;
    height:35px;
    border-radius: 10px;
}
#btn_detail:hover{
    background-color: white;
    color: darkblue;
}

/* **************/













</style>
