<?php 
    session_start();
    require "./includes/head.php" 
?>
 <style>
        /* Your CSS styles here */
		body {
	font-family: 'Inter', sans-serif;
	color: #666666;
  background-color: #f7fafc;
  font-size: 16px;
  padding-bottom: 5rem;
}

.headline {
  font-size: 1.25rem;
  font-weight: 600;
}

.text--small {
  font-size: 0.875rem;
}

a {
  color: #606FC7;
  font-weight: 600;
}

a:hover {
  color: #434190;
}

i {
  position: absolute;
  padding: 0.75rem;
  color: #606FC7;
}

span.icon {
  position: absolute;
  padding: 0.5rem;
  right: 0;
}

.header {
  background-color: white;
  padding: 1rem;
  padding-bottom: 2.5rem;
}

.header__grid {
  display: grid;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  grid-template-rows: repeat(4, minmax(0, 1fr));
  gap: 1.5rem;
  max-width: 56rem;
}

.header__logo {
  height: 4rem;
}

.header__label {
  text-transform: uppercase;
  display: block;
  margin-bottom: 0.5rem;
  font-size: 0.875rem;
  font-weight: 600;
  color: #718096;
}

.content {
  padding: 1rem;
  width: 100%;
}

.content__grid {
  display: grid;
  grid-template-columns: repeat(12, minmax(0, 1fr));
  grid-template-rows: repeat(3, minmax(0, 1fr));
  max-width: 56rem;
  column-gap: 1rem;
  row-gap: 2.5rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
}

#imageOptions.content__grid {
  grid-template-rows: repeat(2, minmax(0, 0.5fr));
}

.flex {
  display: flex;
}

.flex-1 {
  flex: 1 1 0%;
}

.relative {
  position: relative;
}

.col-6-m3 {
  grid-column: span 6 / span 6;
}

.col-12-s6-m4, .col-12-m6, .col-12-m8, .col-12 {
  grid-column: span 12 / span 12;
}

.result {
  max-width: 56rem;
}

.result__header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1rem;
}

.divider {
  border-width: 1px;
  border-color: #cbd5e0;
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
  height: 0;
}

input:disabled {
  background-color: white;
}

.input {
  border-width: 1px;
  border-color: #cbd5e0;
  border-radius: 0.25rem;
  height: 2.5rem;
  width: 100%;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.input--left {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  margin-right: -1rem;
}

.input__icon {
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.input__label {
  margin-bottom: 0.5rem;
  display: block;
}

.bttn {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  background-color: white;
  border-width: 1px;
  border-color: #cbd5e0;
  margin-right: -0.5rem;
  height: 2.5rem;
}

.bttn.fill {
  width: 50%;
}

.bttn:focus {
  outline: 1px dotted;
}

.bttn:hover {
  background-color: #edf2f7;
}

.left {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.right {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  margin-right: 0;
}

.bttn.active {
  background-color: darkgreen;
  background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
  
  border-radius: 0.25rem;
  transition: 0.5s;
  color: white;
  border-width: 1px;
  border-color: darkgreen;
  
  box-shadow: 0 0 20px #eee;

  border-radius: 5px;
            
			background-size: 200% auto;
            color: white;
}


.bttn__primary {
  background-color: darkgreen;
  color: white;
  
  background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
  border-radius: 0.25rem;
  font-size: 1.125rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  transition: 0.5s;
  box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
			background-size: 200% auto;
            color: white;
  
}


.bttn.active:hover, .bttn__primary:hover {
  
  background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
}

.codeblock {
  border-width: 1px;
  border-color: #cbd5e0;
  border-radius: 0.25rem;
  display: block;
  padding: 0.75rem;
  background-color: white;
}

#urlContainer {
  display: none;
}

/* small breakpoint */
@media (min-width: 640px) {
  .header {
	  padding: 2.5rem;
  }
  .header__grid {
	  grid-template-columns: repeat(2, minmax(0, 1fr));
	  grid-template-rows: repeat(2, minmax(0, 1fr));
  }
  .header__logo {
	  grid-column: span 2 / span 2;
  }
  .content {
	  padding: 2.5rem;
  }
  .content__grid {
	  column-gap: 1rem;
	  row-gap: 2.5rem;
  }
  .col-12-s6-m4 {
	  grid-column: span 6 / span 6;
  }
}

/* medium breakpoint */
@media (min-width: 768px) {
  .header__grid {
	  grid-template-columns: repeat(4, minmax(0, 1fr));
	  grid-template-rows: repeat(1, minmax(0, 1fr));
  }
  .header__logo {
	  grid-column: span 1 / span 1;
  }
  .col-6-m3 {
	  grid-column: span 3 / span 3;
  }
  .col-12-s6-m4 {
	  grid-column: span 4 / span 4;
  }
  .col-12-m6 {
	  grid-column: span 6 / span 6;
  }
  .col-12-m8 {
	  grid-column: span 8 / span 8;
  }
  .bttn {
	  padding-left: 1rem;
	  padding-right: 1rem;
  }
}

#resultContainer {
  display: none;
}

    </style>

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Verifier AI Model</h2>
                            <p>Home <span>-</span> Start your verification</p>
							
                        </div>
						
                    </div>
					
                </div>
				
            </div>
			
        </div>
		
    </section>
	<section class="contact-section padding_top" style="background: smokewhite;">
    <form id="inputForm">
        <!-- Your form content here -->
		<div class="header__grid" style="display: none;">
			
			<div>
				<label class="header__label" for="model">Model</label>
				<input class="input" type="text" id="model" />
			</div>
			<div>
				<label class="header__label" for="version">Version</label>
				<input class="input" type="number" id="version" />
			</div>
			<div>
				<label class="header__label" for="api_key">API Key</label>
				<input class="input" type="text" id="api_key" />
			</div>
		</div>
	</div>

	<div class="content">
		<div class="content__grid">
			<div class="col-12-s6-m4" id="method">
				<label class="input__label">Upload Method</label>
				<div>
					<button data-value="upload" id="computerButton" class="bttn left fill active">Upload</button>
					<button data-value="url" id="urlButton" class="bttn right fill">URL</button>
				</div>
			</div>

			<div class="col-12-m8" id="fileSelectionContainer">
				<label class="input__label" for="file">Select File</label>
				<div class="flex">
					<input class="input input--left flex-1" type="text" id="fileName" disabled />
					<button id="fileMock" class="bttn right active">Browse</button>
				</div>
				<input style="display: none;" type="file" id="file" />
			</div>

			<div class="col-12-m8" id="urlContainer">
				<label class="input__label" for="file">Enter Image URL</label>
				<div class="flex">
					<input type="text" id="url" placeholder="https://path.to/your.jpg" class="input"/><br>
				</div>
			</div>
			<div class="col-6-m3" id="format">
				<label class="input__label">Inference Result</label>
				<!-- <div>
					<button id="jsonButton" data-value="json" class="bttn right fill active">JSON</button>
				</div> -->
				<div class="col-12">
				<button type="submit" value="Run Inference" class="bttn__primary">Run Inference</button>
			</div>
			</div>
		</div>
		<div class="result" id="resultContainer">
			<div class="divider"></div>
			<div class="result__header">
				<h3 class="headline">Result</h3>
				<a href="#">Copy Code</a>
			</div>
			<pre id="output" class="codeblock"> here is your json </pre>
		</div>
	</div>
    </form>
    
    </section>
    
    <?php require "./includes/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Your JavaScript code here
		$(function() {
	//values pulled from query string
	$('#model').val("herbal-verifier-bcm7t");
	$('#version').val("1");
	$('#api_key').val("HByqR3zwZtCI7KOpN3H8");

	setupButtonListeners();
});

var infer = function() {
	$('#output').html("Inferring...");
	$("#resultContainer").show();
	$('html').scrollTop(100000);

	getSettingsFromForm(function(settings) {
		settings.error = function(xhr) {
			$('#output').html("").append([
				"Error loading response.",
				"",
				"Check your API key, model, version,",
				"and other parameters",
				"then try again."
			].join("\n"));
		};

		$.ajax(settings).then(function(response) {
			var pretty = $('<pre>');
			var formatted = JSON.stringify(response, null, 4)

			pretty.html(formatted);
			$('#output').html("").append(pretty);
			$('html').scrollTop(100000);
		});
	});
};

var retrieveDefaultValuesFromLocalStorage = function() {
	try {
		var api_key = localStorage.getItem("rf.api_key");
		var model = localStorage.getItem("rf.model");
		var format = localStorage.getItem("rf.format");

		if (api_key) $('#api_key').val(api_key);
		if (model) $('#model').val(model);
		if (format) $('#format').val(format);
	} catch (e) {
		// localStorage disabled
	}

	$('#model').change(function() {
		localStorage.setItem('rf.model', $(this).val());
	});

	$('#api_key').change(function() {
		localStorage.setItem('rf.api_key', $(this).val());
	});

	$('#format').change(function() {
		localStorage.setItem('rf.format', $(this).val());
	});
};

var setupButtonListeners = function() {
	// run inference when the form is submitted
	$('#inputForm').submit(function() {
		infer();
		return false;
	});

	// make the buttons blue when clicked
	// and show the proper "Select file" or "Enter url" state
	$('.bttn').click(function() {
		$(this).parent().find('.bttn').removeClass('active');
		$(this).addClass('active');

		if($('#computerButton').hasClass('active')) {
			$('#fileSelectionContainer').show();
			$('#urlContainer').hide();
		} else {
			$('#fileSelectionContainer').hide();
			$('#urlContainer').show();
		}

		if($('#jsonButton').hasClass('active')) {
			$('#imageOptions').hide();
		} else {
			$('#imageOptions').show();
		}

		return false;
	});

	// wire styled button to hidden file input
	$('#fileMock').click(function() {
		$('#file').click();
	});

	// grab the filename when a file is selected
	$("#file").change(function() {
		var path = $(this).val().replace(/\\/g, "/");
		var parts = path.split("/");
		var filename = parts.pop();
		$('#fileName').val(filename);
	});
};

var getSettingsFromForm = function(cb) {
	var settings = {
		method: "POST",
	};

	var parts = [
		"https://classify.roboflow.com/",
		$('#model').val(),
		"/",
		$('#version').val(),
		"?api_key=" + $('#api_key').val()
	];

	var method = $('#method .active').attr('data-value');
	if(method == "upload") {
		var file = $('#file').get(0).files && $('#file').get(0).files.item(0);
		if(!file) return alert("Please select a file.");

		getBase64fromFile(file).then(function(base64image) {
			settings.url = parts.join("");
			settings.data = base64image;

			console.log(settings);
			cb(settings);
		});
	} else {
		var url = $('#url').val();
		if(!url) return alert("Please enter an image URL");

		parts.push("&image=" + encodeURIComponent(url));

		settings.url = parts.join("");
		console.log(settings);
		cb(settings);
	}
};

var getBase64fromFile = function(file) {
	return new Promise(function(resolve, reject) {
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function() {
		resizeImage(reader.result).then(function(resizedImage){
			resolve(resizedImage);
		});
    };
		reader.onerror = function(error) {
			reject(error);
		};
	});
};

var resizeImage = function(base64Str) {
	return new Promise(function(resolve, reject) {
		var img = new Image();
		img.src = base64Str;
		img.onload = function(){
			var canvas = document.createElement("canvas");
			var MAX_WIDTH = 1500;
			var MAX_HEIGHT = 1500;
			var width = img.width;
			var height = img.height;
			if (width > height) {
				if (width > MAX_WIDTH) {
					height *= MAX_WIDTH / width;
					width = MAX_WIDTH;
				}
			} else {
				if (height > MAX_HEIGHT) {
					width *= MAX_HEIGHT / height;
					height = MAX_HEIGHT;
				}
			}
			canvas.width = width;
			canvas.height = height;
			var ctx = canvas.getContext('2d');
			ctx.drawImage(img, 0, 0, width, height);
			resolve(canvas.toDataURL('image/jpeg', 1.0));  
		};
	});	
};

    </script>

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac2eee593390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
