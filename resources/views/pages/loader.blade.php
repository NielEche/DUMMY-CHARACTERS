
	<style>
		body {
			font-family: 'Roboto Condensed';
		}
	</style>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>

	<script>
		$(() => {
			{
				let progressbar = $('#progressbar');
				let max = progressbar.attr('max');
				let time = (1000 / max) * 5;
				let value = progressbar.val();

				const loading = () => {
					value += 1;
					progressbar.val(value);

					$('.progress-value').html(value + '%');

					if (value == max) {
						clearInterval(animate);
					}
				};

				const animate = setInterval(() => loading(), time);
			};
		});
	</script>

	<div id="jquery-script-menu">
		<div class="jquery-script-center">
			<div id="carbon-block"></div>
			<div class="jquery-script-ads">
				<script type="text/javascript">
					<!--
					google_ad_client = "ca-pub-2783044520727903";
					/* jQuery_demo */
					google_ad_slot = "2780937993";
					google_ad_width = 728;
					google_ad_height = 90;
					//
					-->
				</script>
				<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</div>
			<div class="jquery-script-clear"></div>
		</div>
	</div>

	<div class="demo-wrapper html5-progress-bar">
		<div class="progress-bar-wrapper">
			<progress id="progressbar" value="0" max="100"></progress>
			<span class="progress-value">0%</span>
		</div>
	</div>
	<script>
		try {
			fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
				method: 'HEAD',
				mode: 'no-cors'
			})).then(function (response) {
				return true;
			}).catch(function (e) {
				var carbonScript = document.createElement("script");
				carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
				carbonScript.id = "_carbonads_js";
				document.getElementById("carbon-block").appendChild(carbonScript);
			});
		} catch (error) {
			console.log(error);
		}
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
				'.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
