@extends('layouts.app')

@section('content')
    <div class="banner_section">
        <div class="sextion_banner_text">
            <h1>Nous Sommes Là pour vous</h1>
            <p>Apprenez de nouvelles compétences avec nous, </p>
            <button class="regsiter_button">
                Register
            </button>
        </div>
    </div>
   <h2 class="aboutus_title"></h2>
    <div class="aboutus_section">
        <div class="about_img">
            <img src="{{ asset("images/pp.png") }}" alt="">
        </div>
        <div class="about_desc">
            <h2>IOT-FORMATIONS</h2>
            <p>
                Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. Lorem 
                Ipsum has been the industry's standard 
                dummy text ever since the 1500s, 
                when an unknown printer took a galley 
                of type and scrambled it to make a type 
                specimen book.
            </p>
        </div>
    </div>
    <h2 class="services_title"></h2>
    <div class="allservices">
        <div class="timeline">
            <div class="containnner container-left">
                <div class="image" style="background-image:url('/images/a.png')"></div>
                <div class="content">
                    <span>APPLICATION & MOBILE</span>
                    <h2>Application & Mobile</h2>
                    <p>
                        APPLICATION & MOBILITÉ
                        Produisez des applications toujours plus performantes & sécurisées.<br>
                        React Native, Xamarin, Ionic, Kotlin, Java, WPF,  Android, Flutter, Linux RT…
                    </p>
                </div>
            </div>
            <div class="containnner container-right">
                <div class="image" style="background-image:url('/images/b.png')"></div>
                <div class="content">
                    <span>WEB & CLOUD</span>
                    <h2>WEB & CLOUD</h2>
                    <p>
                        Angular, Node.js, Vue.js, ReactJS, ASP.NET Core MVC, Azure, Spring Cloud… <br>
                        WEB & CLOUD
                        Produisez des applications web toujours plus connectées
                    </p>
                </div>
            </div>
            <div class="containnner container-left">
                <div class="image" style="background-image:url('/images/c.png')"></div>
                <div class="content">
                    <span>DEVOPS & AGILITÉ</span>
                    <h2>DEVOPS & AGILITÉ</h2>
                    <p>
                        Le DevOps est un système permettant aux équipes de développeurs (development) et aux équipes s’occupant des infrastructures informatiques (operation) de travailler en synergie grâce à l’automatisation du workflow et de l’infrastructure ainsi que l’évaluation systématique des performances. 
                    </p>
                </div>
            </div>
            
            <div class="containnner container-right">
                <div class="image" style="background-image:url('/images/d.png')"></div>
                <div class="content">
                    <span>INFOGRAPHIE & BUREAUTIQUE</span>
                    <h2>INFOGRAPHIE & BUREAUTIQUE</h2>
                    <p>
                        Diffusez la création et la productivité au sein de votre équipe <br>
                        Excel 2019, Project, LibreOffice, Photoshop, Illustrator, Premiere, After Effects, 3DS…
                    </p>
                </div>
            </div>

            <div class="containnner container-left">
                <div class="image" style="background-image:url('/images/e.png')"></div>
                <div class="content">
                    <span>DATABASE, BIGDATA & NOSQL</span>
                    <h2>DATABASE, BIGDATA & NOSQL</h2>
                    <p>
                        ELK, ElasticSearch, Spark, Storm, Hadoop, Cassandra, MS-SQL optimisation, Machine Learning… <br>
                        Stockez vos données à la vitesse de l'éclair
                    </p>
                </div>
            </div>
      


         <div class="containnner container-right">
            <div class="image" style="background-image:url('/images/f.png')"></div>
            <div class="content">
                <span>MS-CRM & WEBMARKETING</span>
                <h2>MS-CRM & WEBMARKETING</h2>
                <p>
                    Microsoft CRM, Orchard CMS, SEO, Community Management, 
                    TOGAF, Marchés Publics… <br>
                    Gagnez en réactivité ainsi que des parts de marché
                </p>
            </div>
        </div>
    

        <div class="containnner container-left">
            <div class="image" style="background-image:url('/images/g.png')"></div>
            <div class="content">
                <span>INFRASTRUCTURE & SÉCURITÉ</span>
                <h2>INFRASTRUCTURE & SÉCURITÉ</h2>
                <p>
                    OWASP, Android Sécurité, Pentesting, Terraform, Infoblox, Fortinet… <br>
                </p>
            </div>
        </div>


        <div class="containnner container-right">
            <div class="image" style="background-image:url('/images/h.png')"></div>
            <div class="content">
                <span>SÉMINAIRE & CERTIFICATIONS</span>
                <h2>SÉMINAIRE & CERTIFICATIONS</h2>
                <p>
                    Certifications DevOps, Offensive Security, Product Owner, Kubernetes, Scrum…<br>
                </p>
            </div>
        </div>


        <div class="containnner container-left">
            <div class="image" style="background-image:url('/images/i.png')"></div>
            <div class="content">
                <span>CERTIFICATIONS PROFESSIONNELLES CPF</span>
                <h2>CERTIFICATIONS PROFESSIONNELLES CPF</h2>
                <p>
                    Certification CPF DevOps et Microservices & Deep Learning et Intelligence Artificielle<br>
                </p>
            </div>
        </div>



        </div>
    </div>


    
@endsection
