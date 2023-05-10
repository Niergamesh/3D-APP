<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- bootstrap 5.2.3 -->
        <link rel="stylesheet" href="css/custom.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <!-- X3dom -->
        <link rel='stylesheet' type='text/css' href='css/x3dom.css'>

        <link rel="stylesheet" href="assets/css/icon-dukamarket.css" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.png" />
        <title>Mobile 3D Apps Lab 6 - 2022</title>
    </head>

<body>
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h1>1oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a id="navHome" class="nav-link"  href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                        </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown has-dropdown has-homemenu">
                        <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="bodyColor" class="container-fluid">

        <!-- This is the home page contents -->
        <div class="main_contents" id="home" style="display:none;">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image">
                        <div id="main_text" class="col-xs-4 col-sm-8">
                            <h2>Coca Cola Great Britain</h2>
                            <h3>Founded by Dr John S Pemberton</h3>
                            <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of
                                non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="desc_placeholder" class="row"></div>
            
        </div><!-- End home page contents-->

        <div id="about" style="display:none;">
        <div class="container">
                <div class="row">
                    <div class="main_service_area sections text-center">
                        <div class="head_title text-center">
                            <h1>what we do?</h1>
                            <div class="separator"></div>

                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="single_service">
                                <div class="single_service_icon">
                                <img src="assets/images/coca_cola.jpg" alt="" />
                                </div>
                                <h3>Grab value,discover magic.</h3>
                                <p>Enjoy the crisp taste you love with the Coca-Cola Value Collection. Discover the collection today.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_service">
                                <div class="single_service_icon">
                                    <img src="assets/images/dr_pepper.jpg" alt="" />
                                </div>
                                <h3>Create Memories</h3>
                                <p>Whether you're celebrating a birthday, watching the big game, or toasting the newlyweds, custom bottles make the occasion special.</p>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>  

        <!-- This is the content for X3D models and 3D Image Gallery -->
        <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
                <!-- X3D Model -->
                <div class="col-sm-8">
                    <div class="card text-left">
                        <div id="tab_header_placeholder" class="card-header"></div>
                        <div class="card-body">
                            <div id="x3d">
                                <div id="x3dModelTitle" class="card-title card-title-h2 drinksText"></div>
                                <!-- Place the X3D code here -->
                                <div class="model3D">
                                    <x3d id="model">
                                        <scene>
                                            <inline id="x3dModel" nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"> </inline>
                                        </scene>
                                    </x3d>
                                </div> 
                                <div id="x3dCreationMethod" class="card-text drinksText"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D image gallery -->
                <div class="col-sm-4">
                    
                <div class="card text-left">
                <!-- Camera Views -->
                <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                      <!-- Dropdown nav-tab -->
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                            <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                            <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                      </div>                            
                      <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                      <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                      <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                      <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                      </div>
                    </div>
                </div> 
                
                <!-- Animation Options -->
                <div class="card text-left">
                <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Animation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                      </div>
                      <a href="#" class="btn btn-success btn-responsive" onclick="spin();">RotX</a>
                      <a href="#" class="btn btn-success btn-responsive">RotY</a>
                      <a href="#" class="btn btn-success btn-responsive">RotZ</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                      <div class="card-text x3dAnimationDescription drinksText">
                          <p>These buttons select a range of X3D animation options</p>
                      </div>
                    </div>
            
            
                </div> 
                <!-- Render -->
                <div class="card text-left">
                <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Polygon</a>
                            <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                            <a class="dropdown-item" href="#">Vertex</a>
                          </div>
                        </li>
                      <!-- Dropdown nav-tab -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Default</a>
                            <a class="dropdown-item" href="#">Onmi On/Off</a>
                            <a class="dropdown-item" href="#">Target On/Off</a>
                            <a class="dropdown-item" href="#">Headlight On/Off</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                      </div>
                      <a href="#" class="btn btn-success btn-responsive">Poly</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                      <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                      <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                      <div class="card-text x3dRenderDescription drinksText">
                          <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                      </div>
                    </div>
                  </div>
           
           
                </div> 
                </div>
            </div> 

              <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="exDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="expansionTitle" class="card-title card-title-h2 drinksText"></div>
                        <div id="expansionSubTitle" class="card-subtitle card-title-h3 drinksText"></div>
                        <div id="expansionDescription" class="card-text card-title-p drinksText"></div>   
                        <a id="expansionLink" href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

            <div id="interaction" class="row" style="display:none;">
            <div class="col-sm-12">
                <div class="card text-left">
                <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery row" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                    
                  </div>
                  
            </div>
            </div>

      

    </div>
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <p>
                    <h4 class="tpfooter__widget-title">
                        All tutorials are created using Bootstrap v4.3
                    </h4>
                    <p class="tpfooter__name">
                        2022 Season <br />
                        Xinpeng Hu
                    </p>
                    <span class="tpfooter__copyright-text">Copyright © Mobile Web 3D Applications</span>
                    <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a>
                </p>
                </div>
                <div class="navbar-text float-right social">
                    <div class="tpfooter__widget-social">
                        <span class="tpfooter__widget-social-title mb-2">Social Media:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contact modal -->
        <div class="modal fade" id="contactModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">3D App Contact Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <p>Xinpeng Hu, Email: h.Xinpeng@sussex.ac.uk</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="fonts/js/all.js"></script>
    <script type='text/javascript' src='js/x3dom.js'></script>
    <!-- popover plug-in -->
    <script src="js/custom.js"></script>

    <script src="js/getJsonData.js"></script>
    <script src="js/modelInteractions.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/swap_restyle.js"></script>
    <script type="text/javascript" src="js/gallery_generator.js"></script>

    <script>
        x3dModels = {}

        function changeModel(_key) {
            console.log(_key)
            document.getElementById('x3dModelTitle').innerHTML = x3dModels[_key]['modelTitle'];
            e = document.getElementById('x3dModel');
            e.setAttribute("url", "assets/x3d/"+x3dModels[_key]['modelX3d']);
            document.getElementById('x3dCreationMethod').innerHTML = x3dModels[_key]['modelDescription'];

            document.getElementById('expansionTitle').innerHTML = x3dModels[_key]['expansionTitle'];
            document.getElementById('expansionSubTitle').innerHTML = x3dModels[_key]['expansionSubTitle'];
            document.getElementById('expansionDescription').innerHTML = x3dModels[_key]['expansionDescription'];
            document.getElementById('descriptionGallery').innerHTML = x3dModels[_key]['descriptionGallery'];
            
            e2 = document.getElementById('expansionLink')
            e2.innerHTML = "Visit " + x3dModels[_key]['tabName'];
            e2.setAttribute("href", x3dModels[_key]['expansionLink']);
        }

        $(document).ready(function() {

            $.getJSON("index.php/apiGetDescData")
                .done(function(json) {
                    // Debug
                    console.log('Web service response for drink brand data:', json);
                    // Write the handler to display the results in an HTML view
                    str = ''
                    // Build the HTML view -we need to loop because we may have more than one of a particular brand
                    for (var i=0;i<json.length;i++) {
                        // Grab the drink brand details
                        str += 
                            "<div class='col-sm-4'>" +
                            "   <div class='card tpblog__item'>" +
                            "       <a href='#' class='tpblog__thumb fix'><img src='assets/images/" + json[i].modelCover + "' alt=" + json[i].modelTitle + "></a>" +
                            "       <div class='card-body'>" +
                            "           <h3 class='card-title'>" + json[i].modelTitle + "</h3>" +
                            "           <p class='card-text'>" + json[i].modelDescription + "</p>" +
                            "           <a href='#' class='btn btn-primary'>Find out more ...</a>" +
                            "        </div>" +
                            "    </div>" +
                            "</div>";
                    }
                    // And return the constructed HTML to the '</div>placeholder </div>'
                    document.getElementById("desc_placeholder").innerHTML=str;
                    // Alternatively,you could use the JQuery .html()method to return the HTML string to the placeholder div tag
                    // $('#placeholder').html(str);
                })
                .fail(function() {
                    console.log('viewDrinks JS Handler:Server returned an Error,trap this in your PHP Server code');
                });

            $.getJSON("index.php/apiGetModelData")
                .done(function(json) {
                    // Debug
                    console.log('Web service response for drink brand Model data:', json);
                    // Write the handler to display the results in an HTML view
                    tab_header_str = "<ul class='nav nav-tabs card-header-tabs'>"
                    // Build the HTML view -we need to loop because we may have more than one of a particular brand
                    for (var i=0;i<json.length;i++) {
                        // Grab the drink brand details
                        isActive = i==0?' active':''
                        tab_header_str +=
                            "<li class='nav-item'>" +
                            "    <a id='nav" + json[i].tabName + "' class='nav-link" + isActive + "' href='#' onclick='changeModel(\""+json[i].keyStr+"\");'>" + json[i].tabName + "</a>" +
                            "</li>";
                        
                        _key = json[i].keyStr;
                        x3dModels[_key] = {}
                        x3dModels[_key]['tabName'] = json[i].tabName;
                        x3dModels[_key]['modelTitle'] = json[i].modelTitle;
                        x3dModels[_key]['modelDescription'] = json[i].modelDescription;
                        x3dModels[_key]['modelX3d'] = json[i].modelX3d;

                        x3dModels[_key]['expansionTitle'] = json[i].expansionTitle;
                        x3dModels[_key]['expansionSubTitle'] = json[i].expansionSubTitle;
                        x3dModels[_key]['expansionDescription'] = json[i].expansionDescription;
                        x3dModels[_key]['descriptionGallery'] = json[i].descriptionGallery;
                        x3dModels[_key]['expansionLink'] = json[i].expansionLink;
                        
                    }
                    tab_header_str += "</ul>"
                    console.log('debug:', tab_header_str);
                    // And return the constructed HTML to the '</div>placeholder </div>'
                    document.getElementById("tab_header_placeholder").innerHTML = tab_header_str;
                    
                    // Alternatively,you could use the JQuery .html()method to return the HTML string to the placeholder div tag
                    // $('#placeholder').html(str);

                    // First Model Tab;
                    changeModel(json[0].keyStr)
                })
                .fail(function() {
                    console.log('viewDrinks JS Handler:Server returned an Error,trap this in your PHP Server code');
                });
        });
    </script>

</body>

</html>