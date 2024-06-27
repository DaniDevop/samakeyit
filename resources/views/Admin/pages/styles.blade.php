<style>

    /*css de la page index */

body
{
	background: #008ea1;
}
#container
{
	width: 40%;
	margin-top: 0px;
	margin-left: 25% ;
	margin-right: 30% auto ;
	height:  20%;
}
/*boder form */


#containerh1
{
	width: 38%;
	margin: 0 auto;
	padding-bottom: 50px;
	text-align: center;
}



/* css de la sidebar */
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	list-style-type: none;
	text-decoration: none;
	font-family: 'verdana';
}
.sidebar{
	width: 300px;
	position: fixed;
	left: 0;
	top: 0;
	height: 100vh;
	background: #008ea1;
	z-index: 100;
	transition: width 300ms;
}
.sidebar-brand
{
	height: 90px;
	padding: 1rem 0rem 1rem 2rem;
	color: #fff;
}
.sidebar-brand span
{
	display: inline-block;
	margin-right: 1rem;
}
.sidebar-menu{
	margin-top: 1rem;
}
.sidebar-menu a
{
	padding-left: 1rem;
	display: block;
	color: #fff;
	font-size: 1.1rem;
}
.sidebar-menu li
{
	width: 100%;
	margin-bottom: 2rem;
	padding-left: 10%;
}
.sidebar-menu a span:first-child
{
	padding-left: 1rem;
	font-size: 1.5rem;
}
.sidebar-menu a
{
	background: #fff;
	padding-top: 1rem;
	padding-bottom: 1rem;
	color: #008ea1;
	border-radius: 30px 0px 0px 0px;
}
.content{
	transition: margin-left 300ms;
	margin-left: 22%;
}

/* css de la navbar en haut*/

header{
	background-color: #fff;
	display: flex;
	justify-content: space-between;
	padding: 1rem;
	box-shadow: 2px 5px 15px 2px rgb(0 0 0 / 10%);
	position: fixed;
	left: 22%;
	width: calc(100% - 22%);
	top: 0;
	z-index: 100;
	transition: left 300ms;
}
.accueil{
	font-size: 1.5rem;
	padding-right: 1rem;
	margin-left: 15px;
	color: #008ea1;
}
.search-wrapp{
	border: 1px solid #008ea1;
	border-radius: 20px;
	height: 38px;
	display: flex;
	align-items: center;
	overflow-x: hidden;
}
.search-wrapp input{
	height: 100%;
	padding: .5rem;
	border: none;
	outline: none;
}
.search-wrapp span{
	display: inline-block;
	padding: 0rem 1rem;
	font-size: 1.5rem;
	color: #008ea1;
}
.user-wrapp{
	display: flex;
	align-items: center;
}
.user-wrapp img{
	border-radius: 50%;
	margin-right: 5rem;
}
.user-wrapp small{
	color: #ccc;
	display: inline-block;
}
.logo-admin{
	cursor: pointer;
}
#dropdown{
	position: relative;
	display: inline-block;
}
.dropdown-content{
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	height: 80px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	padding: 5px;
	z-index: 1;
}
#dropdown:hover .dropdown-content{
	display: block;
	cursor: pointer;
}
.dropdown-content p{
	padding: .5rem;
}

/* css du menu checkbox

#menu:checked ~ .sidebar{
	width: 60px;
}
#menu:checked ~ .sidebar .sidebar-brand, h2 span:last-child,
#menu:checked ~ .sidebar li a span:last-child{
	display: none;
}
#menu:checked ~ .content{
	margin-left: 60px;
}
#menu:checked ~ .content header{
	width: calc(100% - 60px);
	left: 60px;
}
/*

/* css des cartes de la page bilan */

main{
	margin-top: 80px;
	background-color: #ebf6ff;
	padding: 2rem 1.5rem;
	min-height: calc(100vh);
}
.cards{
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-gap: 2rem;
	margin-top: 1rem;
}
.card-single{
	display: flex;
	background-color: #fff;
	justify-content: space-between;
	padding: 2rem;
	border-radius: 10px;
	box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 10%);
}
.card-single span:first-child{
	color: #f8e80c;
}
.card-single span:last-child{
	font-size: 2rem;
}
.card-single small{
	color: grey;
}
.card-single:hover{
	background-color: #008ea1;
	color: #fff;
}

/* css des listes*/

.composant{
	margin-top: 3.5rem;
	display: grid;
	grid-gap: 2rem;
	grid-template-columns: 69% auto;
}
.case{
	background-color: #fff;
	border-radius: 10px;
}
.header-case, .body-case{
	padding: .5rem
}
.header-case{
	display: flex;
	justify-content: space-between;
	align-items: center;

}
.header-case button{
	background-color: #008ea1;
	border-radius: 10px;
	color: #fff;
	font-size: .8rem;
	padding: .5rem 1rem;
	border: none;
	cursor: pointer;
}
.btn{
	background-color: #008ea1;
	border-radius: 10px;
	color: #fff;
	font-size: .8rem;
	padding: .5rem 1rem;
	border: none;
	cursor: pointer;
	margin-bottom: 1rem;
	margin-left: 5px;

}
table{
	border-collapse: collapse;
}
thead tr{
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
}
thead td{
	font-weight: 700;
}
td{
	padding: .5rem 1rem;
}
td .status-produit{
	display: inline-block;
	height: 15px;
	width: 15px;
	margin-right: 1rem;
	border-radius: 50%;
}
.status-produit.color-one{
	background-color: #ec1c24;
}
.status-produit.color-two{
	background-color: #ec1c24;
}
.status-produit.color-three{
	background-color: #ec1c24;
}
.status-produit.color-four{
	background-color: #ec1c24;
}
.status-produit.color-five{
	background-color: #ec1c24;
}
tr td:last-child{
	display: flex;
	align-items: center;
}
.tableau{
	overflow-x: auto;
	width: 100%;
}
.all-users{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: .5rem .7rem;

}
.infos{
	display: flex;
	align-items: center;
}
.infos img{
	border-radius: 50%;
	margin-right: 1rem;
}
.user-contact span{
	font-size: 1.2rem;
	display: inline-block;
	margin-left: .5rem;
}

.fa-phone{
	color: #1DB954;
	cursor: pointer;
}
.fa-bars{
	cursor: pointer;
}
.statistiques{
	background-color: #fff;
	display: flex;
	height: 300px;
	align-items: flex-end;
}
.statistique-barre{
	flex-grow: 1;
	border: 1px solid #ccc;
	margin: 6px;
}
.bar1{
	height: 95%;
	background-color: #ec1c24;
}
.bar2{
	height: 55%;
	background-color: #00a8f3;
}
.bar3{
	height: 45%;
	background-color: #ec1c24;
}
.bar4{
	height: 85%;
	background-color: #00a8f3;
}
.bar5{
	height: 35%;
	background-color: #ec1c24;
}
.bar6{
	height: 95%;
	background-color: #00a8f3;
}

/*css calendriers */

.calendar{
	padding-top: 2rem;

}
.mois-annee{
	padding: 70px 25px;
	width: 100%;
	background-color: #008ea1;
	text-align: center;
}
.mois-annee ul{
	margin: 0;
	padding: 0;
}
.mois-annee ul li{
	color: #fff;
	font-size: 20px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
.mois-annee .prev{
	float: left;
	padding-top: 10px;
}
.mois-annee .next{
	float: right;
	padding-top: 10px;
}
.mois{
	margin: 0;
	padding: 10px 0;
	background-color: #ddd;
}
.mois li{
	display: inline-block;
	width: 13%;
	color: #666;
	text-align: center;
}
.jours{
	padding: 10px 0;
	background-color: #eee;
	margin: 0;
}
.jours li{
	display: inline-block;
	width: 13%;
	text-align: center;
	margin-bottom: 5px;
	font-size: 12px;
	color: #777;
}
.jours li .active{
	padding: 5px;
	background-color: #008ea1;
	color: #fff !important;
}

/* media query */

@media only screen and (max-width: 960px){
	.cards{
		grid-template-columns: repeat(3, 1fr);
	}
	.recent-grid{
		grid-template-columns: 60% 40%;
	}
}
@media only screen and (max-width: 768px){
	.cards{
		grid-template-columns: 100%;
	}
	.composant{
		grid-template-columns: repeat(1, 1fr);
	}
	.search-wrapp{
		display: none;
	}
	.sidebar{
		left: -100% !important;
	}
	header p{
		display: flex;
		align-items: center;
	}
	header p label{
		display: flex;
		padding-right: 0rem;
		margin-right: 1rem;
		height: 40px;
		width: 40px;
		border-radius: 50%;
		color: #fff;
		align-items: center;
		justify-content: center !important;
		background-color: #008ea1;
	}
	header p span{
		text-align: center;
		padding-right: 0rem;
	}
	.content{
		width: 100%;
		margin-left: 0rem !important;
	}
	header{
		width: 100% !important;
		left: 0 !important;
	}
	#menu:checked ~ .sidebar {
		left: 0 !important;
		z-index: 100;
		width: 45%;
	}
	#menu:checked ~ .sidebar li a{
		padding-left: 1rem;

	}
	#menu:checked ~ .sidebar .sidebar-brand,
	#menu:checked ~ .sidebar li{
			padding-left: 2rem;
			text-align: left;
	}
	#menu:checked ~ .sidebar .sidebar-brand, h2 span:last-child,
	#menu:checked ~ .sidebar li a span:last-child{
		display: inline;
	}
	#menu:checked ~ .content{
		margin-left: 0rem !important;
	}
}
@media only screen and (max-width: 560px){
	.cards{
		grid-template-columns: 100%;

	}
}
@media only screen and (max-width: 1200px){
	.sidebar{
		width: 60px;
	}
	.sidebar .sidebar-brand, h2 span:last-child,
	.sidebar li a span:last-child{
		display: none;
	}
	.content{
		margin-left: 60px;
	}
	.content header{
		width: calc(100% - 60px);
		left: 60px;
	}
}

/* style  du calendrier */
body {
	font-family: Arial, sans-serif;
	margin: 20px;
	padding-top: 6rem;
	width: 100%;
}
.calendar {
	margin: 0 auto;
	border-collapse: collapse;
	width: 90%;
	text-align: center;
}
.calendar th, .calendar td {
	border: 1px solid #ddd;
	padding: 10px;
	text-align: center;

}
.calendar th {
	background-color: #008ea1;
	padding: 30px 25px;}
.today {
	background-color: #008ea1;
	color: white;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
