<style type="text/css">
html{
	scroll-behavior :smooth;
} 

*{ margin: 0 ;padding: 0 ;box-sizing: border-box ; font-family: 'Mulish', sans-serif;
font-family: 'Roboto', sans-serif; }
.row{margin-left: 0!important; margin-right: 0!important;}
.nav_style {
	background-color: #a29bfe;
}
.nav_style a {color: white;}



/*///////main header\\\\\\\\*/

.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size:  3rem;
}

.leftside img{ animation:  heartbeat 5s linear infinite ; }
@keyframes heartbeat
{
	0%
	{transform:  scale(.75);
	}
	20%
	{transform:  scale(1);
	}
	40%
	{transform:  scale(.75);
	}
	60%
	{transform:  scale(1);
	}
	80%
	{transform:  scale(.75);
	}
	100%
	{transform:  scale(1);
	}
}


/**********************corona update*************************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{color:  #ff7675; }
.corona_update h1{ font-size:2rem;text-align:center; }



/*/////////about section//////////*/
.sub-section{
	background-color: #fbfafd;
}


/*/////////// footer/////////////*/
.footer_style{
	background-color: #a29bf2!important;

}
.footer_style p{
	margin-bottom: 0!important;
}
/*//////// responsive////////*/
@media(max-width: 768px){
	.main_header{height:  700px;text-align:  center;}
	.main_header h1{
		text-align: center;
		padding:  0;
		width: 100%;
		font-size: 30px;}
      .count_style{
      	display: inline!important;

      }
      .count_style p{
      	text-align: center;
      }
      .about_res{
      	margin-left: 0!important;
      }
	}

</style>