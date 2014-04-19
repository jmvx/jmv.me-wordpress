html {
  position:relative;
}

strong {
  font-weight:bold;
}

center {
  font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
  font-size:11pt;
  line-height:1.4em;

}

blockquote {
  display:block;
  margin-left:30px;
}

em {
  font-style:italic;
}

body {
    font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;    
    color:#767676;
}

a {
  text-decoration:none;
  color:black;
  cursor:hand;
}

a:hover {
  color:rgb(196,169,136);
}

#wrapper {
  display:block;
  min-width:980px;
  padding-top:10px;
  background-color:white;
  min-height:100%;
  overflow:hidden;
  
}

#header {
  display:block;
  width:100%;
  min-width:980px;
  overflow:hidden;
  position:absolute;
  right:0;
  left:0; 
  
  position:fixed;
}

#header h1 {
  font-size:24pt;
  text-align:center;
  font-weight:normal;
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-family: 'Parisienne', cursive;
  background-color:rgba(0,0,0,0.6);
  color:white;
  margin:0px;
  padding: 10px 0;
}

#main {
  width:980px;
  display:block;
  margin:0px auto;
  padding-top:100px;
}

#content {
  width:700px;
  float:left;
  padding-left:20px;
  padding-right:20px;
  padding-top:20px;
  min-height:300px;
}

#content p {
  font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
  font-size:11pt;
  line-height:1.4em;
  padding-bottom:10px;
}



#content h1 {
  font-size:15pt;
  margin-top:5px;
  padding-bottom:5px;
  margin-bottom:6px;
  border-bottom:1px solid #e0e0e0
}

.wp-video {
  margin-right:auto;
  margin-left:auto;
  border:1px solid #e0e0e0;
  padding:5px;
  background-color:none;
  
}

.single-post {
  margin-bottom:10px;
}

.single-post:last-child {
  margin-bottom:10px;
}

.single-post ul {
  font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
  font-size:11pt;
  margin-left:15px;
}

.single-post li {
  margin-bottom:5px;
}

.wp-caption {
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  border:1px solid #e0e0e0;
  padding-top:5px;
  max-width:696px;
  margin-bottom:10px;
}

.wp-caption-text {
  padding:10px;
  font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
}

.image-description {
  width:700px;
  text-align:left;
  <? if ( is_page('portfolio') ) : ?>
  border-bottom:1px solid #e0e0e0;
  margin-bottom:20px;
  <? endif ?>
}

img.aligncenter {
  margin-left:auto;
  margin-right:auto;
  display:block;
  border:1px solid #e0e0e0;
  padding:5px;
  max-width:490px;
}

img.aligncenter.size-large {
  max-width:688px;
  height:auto;
}

hr {
  border:1px dashed #e0e0e0;
}

.wp-caption img {
  margin:0px;
  padding:0px;
  display:block;
  text-align:center;
  max-width:490px;
  max-width:685px;
  height:auto;
  padding-left:5px;
}

img.alignleft {
  text-align:center;
  width:210px;
  height:auto;
  float:left;
  border:1px solid #e0e0e0;
  padding:5px;
  margin-right:20px;
  margin-bottom:20px;
}

img.alignright {
  display:block;
  text-align:center;
  float:right;
  border:1px solid #e0e0e0;
  padding:5px;
  margin-left:20px;
  margin-bottom:20px;
}

img.attachment-thumbnail {
  border:1px solid #e0e0e0 !important;
  padding:5px;
}

img.attachment-medium {
  border:1px solid #e0e0e0;
  padding:5px;
  margin-right:auto;
  margin-left:auto;
  display:block;
}

.gallery-caption {
  font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
  padding-top:15px;
  font-size:11pt;
}

.post-title {
  margin-top:5px;
  padding-bottom:5px;
  border-bottom:1px solid #e0e0e0;
  font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
}

.post-timestamp {
  font-size:10pt;
  font-weight:normal;
  display:inline;
  float:right;
  padding-top:7px;
  padding-bottom:5px;
}

.menu {
  display:block;
  margin:0px auto;
  width:400px;
}

.menu ul {
  padding:0px;
  margin:0px;
  font-size:10pt;
  height:41px;
  background-color:rgba(0,0,0,0.6);
}

.menu li {
  padding-top:10px;
  padding-bottom:11px;
  width:100px;
  height:20px;
  float:left;
  text-align:center;
  list-style-type:none;
}

.menu li:hover > a {
  cursor:hand;
  color:rgb(196,169,136);
}

.menu li a {
  display:block;
  height:50px;
  margin-top:-10px;
  padding-top:12px;
  color:white;
}

#sidebar {
  margin-top:24px;  
  width:232px;
  float:left;
  font-size:10pt;
}

#sidebar h2 {
  margin-top:0px;
  margin-bottom:10px;
  font-size:12pt;
  color:#767676;
}

#sidebar li {
  list-style-type:none;
  border-bottom:1px solid #e0e0e0;
  padding-left:10px;
  padding-top:13px;
  padding-bottom:13px;
  height:20px;
}

#sidebar li:last-child {
  border-bottom:none;
}

#sidebar li a {
  display:block;
  height:30px;
  margin-top:-10px;
  margin-left:-10px;
  padding-top:12px;
  padding-left:12px;
}

#sidebar ul {
  padding:0px;
  margin:0px;
}

.sidebar-box {
  display:block;
  border:1px solid #e0e0e0;
  margin-bottom:10px;
  margin-right:10px;
}

#delimeter {
  clear:both;
  margin-bottom:120px;
}

#footer {
  border-top:1px solid #e0e0e0; 
  font-size:8pt;
  text-align:center;
  padding-top:20px;
  padding-bottom:20px;
  position:absolute;
  bottom:0px;
  width:100%;
  min-width:980px;
  height:50px;
}

#footer p {
  line-height:1.4em;
}

ul {
  padding:0px;
  margin:0px;
}

li {
  list-style-type:circle;
  line-height:1.4em;
}

ul.contact-list {
  padding-bottom:10px;
}

ul.contact-list li {
  display:inline;
  text-align:center;
  list-style-type:none;
  padding-right:20px;
}

ul.contact-list li:last-child {
  padding-right:0px;
}

.nav {
  font-size:10pt;
}

#archive-list {
  -moz-column-count:3; /* Firefox */
  -webkit-column-count:3; /* Safari and Chrome */
  column-count:3;
  -moz-column-gap:40px; /* Firefox */
  -webkit-column-gap:40px; /* Safari and Chrome */
  column-gap:40px;
  padding-top:12px;
}

#archive-list li {
  padding-bottom:5px;
  font-size:11pt;
  list-style-type:circle;
}

/* Making gist embedded text smaller */
.line-numbers, .line-data { font-size:10pt;}

h1.portfolio-padding {
  padding-top:10px;
}