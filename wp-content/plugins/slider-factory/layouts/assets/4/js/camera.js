/*!
 Camera Slider Master v1.0.0
 Licensed under the MIT license.
*/
(function(a) {
	a.fn.camera = function(H, V) {
		var N = {
			alignment: "center",
			autoAdvance: true,
			mobileAutoAdvance: false,
			barDirection: "leftToRight",
			barPosition: "bottom",
			cols: 6,
			easing: "easeInOutExpo",
			mobileEasing: "",
			fx: "simpleFade",
			mobileFx: "",
			gridDifference: 250,
			height: "50%",
			imagePath: "images/",
			hover: true,
			loader: "bar",
			loaderColor: "#eeeeee",
			loaderBgColor: "#222222",
			loaderOpacity: 0.8,
			loaderPadding: 2,
			loaderStroke: 7,
			minHeight: "200px",
			navigation: true,
			navigationHover: false,
			mobileNavHover: false,
			opacityOnGrid: false,
			overlayer: true,
			pagination: false,
			playPause: true,
			pauseOnClick: true,
			pieDiameter: 38,
			piePosition: "rightTop",
			portrait: true,
			rows: 4,
			slicedCols: 12,
			slicedRows: 8,
			slideOn: "random",
			thumbnails: false,
			time: 1500,
			transPeriod: 1000,
			onEndTransition: function() {},
			onLoaded: function() {},
			onStartLoading: function() {},
			onStartTransition: function() {}
		};

		function L() {
			if (navigator.userAgent.match( /Android/i ) || navigator.userAgent.match( /webOS/i ) || navigator.userAgent.match( /iPad/i ) || navigator.userAgent.match( /iPhone/i ) || navigator.userAgent.match( /iPod/i )) {
				return true
			}
		}
		a.support.borderRadius = false;
		a.each(
			["borderRadius", "BorderRadius", "MozBorderRadius", "WebkitBorderRadius", "OBorderRadius", "KhtmlBorderRadius"],
			function() {
				if (document.body.style[this] !== undefined) {
					a.support.borderRadius = true
				}
			}
		);
		var H  = a.extend( {}, N, H );
		var ae = a( this ).addClass( "camera_wrap" );
		ae.wrapInner( '<div class="camera_src" />' ).wrapInner( '<div class="camera_fakehover" />' );
		var D = a( ".camera_fakehover", ae );
		var W = (".camera_fakehover", ae);
		D.append( '<div class="camera_target"></div>' );
		if (H.overlayer == true) {
			D.append( '<div class="camera_overlayer"></div>' )
		}
		D.append( '<div class="camera_target_content"></div>' );
		var C;
		if (H.loader == "pie" && ! a.support.borderRadius) {
			C = "bar"
		} else {
			C = H.loader
		}
		if (C == "pie") {
			D.append( '<div class="camera_pie"></div>' )
		} else {
			if (C == "bar") {
				D.append( '<div class="camera_bar"></div>' )
			} else {
				D.append( '<div class="camera_bar" style="display:none"></div>' )
			}
		}
		if (H.playPause == true) {
			D.append( '<div class="camera_commands"></div>' )
		}
		if (H.navigation == true) {
			D.append( '<div class="camera_prev"><span></span></div>' ).append( '<div class="camera_next"><span></span></div>' )
		}
		if (H.thumbnails == true) {
			ae.append( '<div class="camera_thumbs_cont" />' )
		}
		if (H.thumbnails == true && H.pagination != true) {
			a( ".camera_thumbs_cont", ae ).wrap( "<div />" ).wrap( '<div class="camera_thumbs" />' ).wrap( "<div />" ).wrap( '<div class="camera_command_wrap" />' )
		}
		if (H.pagination == true) {
			ae.append( '<div class="camera_pag"></div>' )
		}
		ae.append( '<div class="camera_loader"></div>' );
		a( ".camera_caption", ae ).each(
			function() {
				a( this ).wrapInner( "<div />" )
			}
		);
		var q  = "pie_" + ae.index(),
			ag = a( ".camera_src", ae ),
			b  = a( ".camera_target", ae ),
			s  = a( ".camera_target_content", ae ),
			p  = a( ".camera_pie", ae ),
			ah = a( ".camera_bar", ae ),
			am = a( ".camera_prev", ae ),
			r  = a( ".camera_next", ae ),
			R  = a( ".camera_commands", ae ),
			n  = a( ".camera_pag", ae ),
			M  = a( ".camera_thumbs_cont", ae );
		var Z, aj;
		var X = new Array();
		a( "> div", ag ).each(
			function() {
				X.push( a( this ).attr( "data-src" ) )
			}
		);
		var c = new Array();
		a( "> div", ag ).each(
			function() {
				if (a( this ).attr( "data-link" )) {
					c.push( a( this ).attr( "data-link" ) )
				} else {
					c.push( "" )
				}
			}
		);
		var m = new Array();
		a( "> div", ag ).each(
			function() {
				if (a( this ).attr( "data-target" )) {
					m.push( a( this ).attr( "data-target" ) )
				} else {
					m.push( "" )
				}
			}
		);
		var k = new Array();
		a( "> div", ag ).each(
			function() {
				if (a( this ).attr( "data-portrait" )) {
					k.push( a( this ).attr( "data-portrait" ) )
				} else {
					k.push( "" )
				}
			}
		);
		var o = new Array();
		a( "> div", ag ).each(
			function() {
				if (a( this ).attr( "data-alignment" )) {
					o.push( a( this ).attr( "data-alignment" ) )
				} else {
					o.push( "" )
				}
			}
		);
		var j = new Array();
		a( "> div", ag ).each(
			function() {
				if (a( this ).attr( "data-thumb" )) {
					j.push( a( this ).attr( "data-thumb" ) )
				} else {
					j.push( "" )
				}
			}
		);
		var y = X.length;
		a( s ).append( '<div class="cameraContents" />' );
		var J;
		for (J = 0; J < y; J++) {
			a( ".cameraContents", s ).append( '<div class="cameraContent" />' );
			if (c[J] != "") {
				var t = a( "> div ", ag ).eq( J ).attr( "data-box" );
				if (typeof t !== "undefined" && t !== false && t != "") {
					t = 'data-box="' + a( "> div ", ag ).eq( J ).attr( "data-box" ) + '"'
				} else {
					t = ""
				}
				a( ".camera_target_content .cameraContent:eq(" + J + ")", ae ).append( '<a class="camera_link" href="' + c[J] + '" ' + t + ' target="' + m[J] + '"></a>' )
			}
		}
		a( ".camera_caption", ae ).each(
			function() {
				var u = a( this ).parent().index(),
				h     = ae.find( ".cameraContent" ).eq( u );
				a( this ).appendTo( h )
			}
		);
		b.append( '<div class="cameraCont" />' );
		var F = a( ".cameraCont", ae );
		var e;
		for (e = 0; e < y; e++) {
			F.append( '<div class="cameraSlide cameraSlide_' + e + '" />' );
			var ak = a( "> div:eq(" + e + ")", ag );
			b.find( ".cameraSlide_" + e ).clone( ak )
		}

		function z() {
			var h = a( M ).width();
			a( "li", M ).removeClass( "camera_visThumb" );
			a( "li", M ).each(
				function() {
					var au = a( this ).position(),
					u      = a( "ul", M ).outerWidth(),
					w      = a( "ul", M ).offset().left,
					aq     = a( "> div", M ).offset().left,
					at     = aq - w;
					if (at > 0) {
						a( ".camera_prevThumbs", U ).removeClass( "hideNav" )
					} else {
						a( ".camera_prevThumbs", U ).addClass( "hideNav" )
					}
					if ((u - at) > h) {
						a( ".camera_nextThumbs", U ).removeClass( "hideNav" )
					} else {
						a( ".camera_nextThumbs", U ).addClass( "hideNav" )
					}
					var ar = au.left,
					ap     = au.left + (a( this ).width());
					if (ap - at <= h && ar - at >= 0) {
						a( this ).addClass( "camera_visThumb" )
					}
				}
			)
		}
		a( window ).bind(
			"load resize pageshow",
			function() {
				I();
				z()
			}
		);
		F.append( '<div class="cameraSlide cameraSlide_' + e + '" />' );
		var an;
		ae.show();
		var Z  = b.width();
		var aj = b.height();
		var ai;
		a( window ).bind(
			"resize pageshow",
			function() {
				if (an == true) {
					v()
				}
				a( "ul", M ).animate(
					{
						"margin-top": 0
					},
					0,
					I
				);
				if ( ! ag.hasClass( "paused" )) {
					ag.addClass( "paused" );
					if (a( ".camera_stop", U ).length) {
						a( ".camera_stop", U ).hide();
						a( ".camera_play", U ).show();
						if (C != "none") {
							a( "#" + q ).hide()
						}
					} else {
						if (C != "none") {
							a( "#" + q ).hide()
						}
					}
					clearTimeout( ai );
					ai = setTimeout(
						function() {
							ag.removeClass( "paused" );
							if (a( ".camera_play", U ).length) {
								a( ".camera_play", U ).hide();
								a( ".camera_stop", U ).show();
								if (C != "none") {
									a( "#" + q ).fadeIn()
								}
							} else {
								if (C != "none") {
									a( "#" + q ).fadeIn()
								}
							}
						},
						1500
					)
				}
			}
		);

		function v() {
			var h;

			function u() {
				Z = ae.width();
				if (H.height.indexOf( "%" ) != -1) {
					var w = Math.round( Z / (100 / parseFloat( H.height )) );
					if (H.minHeight != "" && w < parseFloat( H.minHeight )) {
						aj = parseFloat( H.minHeight )
					} else {
						aj = w
					}
					ae.css(
						{
							height: aj
						}
					)
				} else {
					if (H.height == "auto") {
						aj = ae.height()
					} else {
						aj = parseFloat( H.height );
						ae.css(
							{
								height: aj
							}
						)
					}
				}
				a( ".camerarelative", b ).css(
					{
						width: Z,
						height: aj
					}
				);
				a( ".imgLoaded", b ).each(
					function() {
						var az     = a( this ),
						ay         = az.attr( "width" ),
						ar         = az.attr( "height" ),
						au         = az.index(),
						at, aq, aw = az.attr( "data-alignment" ),
						ax         = az.attr( "data-portrait" );
						if (typeof aw === "undefined" || aw === false || aw === "") {
							aw = H.alignment
						}
						if (typeof ax === "undefined" || ax === false || ax === "") {
							ax = H.portrait
						}
						if (ax == false || ax == "false") {
							if ((ay / ar) < (Z / aj)) {
								var ap = Z / ay;
								var av = (Math.abs( aj - (ar * ap) )) * 0.5;
								switch (aw) {
									case "topLeft":
										at = 0;
										break;
									case "topCenter":
										at = 0;
										break;
									case "topRight":
										at = 0;
										break;
									case "centerLeft":
										at = "-" + av + "px";
										break;
									case "center":
										at = "-" + av + "px";
										break;
									case "centerRight":
										at = "-" + av + "px";
										break;
									case "bottomLeft":
										at = "-" + av * 2 + "px";
										break;
									case "bottomCenter":
										at = "-" + av * 2 + "px";
										break;
									case "bottomRight":
										at = "-" + av * 2 + "px";
										break
								}
								az.css(
									{
										height: ar * ap,
										"margin-left": 0,
										"margin-right": 0,
										"margin-top": at,
										position: "absolute",
										visibility: "visible",
										width: Z
									}
								)
							} else {
								var ap = aj / ar;
								var av = (Math.abs( Z - (ay * ap) )) * 0.5;
								switch (aw) {
									case "topLeft":
										aq = 0;
										break;
									case "topCenter":
										aq = "-" + av + "px";
										break;
									case "topRight":
										aq = "-" + av * 2 + "px";
										break;
									case "centerLeft":
										aq = 0;
										break;
									case "center":
										aq = "-" + av + "px";
										break;
									case "centerRight":
										aq = "-" + av * 2 + "px";
										break;
									case "bottomLeft":
										aq = 0;
										break;
									case "bottomCenter":
										aq = "-" + av + "px";
										break;
									case "bottomRight":
										aq = "-" + av * 2 + "px";
										break
								}
								az.css(
									{
										height: aj,
										"margin-left": aq,
										"margin-right": aq,
										"margin-top": 0,
										position: "absolute",
										visibility: "visible",
										width: ay * ap
									}
								)
							}
						} else {
							if ((ay / ar) < (Z / aj)) {
								var ap = aj / ar;
								var av = (Math.abs( Z - (ay * ap) )) * 0.5;
								switch (aw) {
									case "topLeft":
										aq = 0;
										break;
									case "topCenter":
										aq = av + "px";
										break;
									case "topRight":
										aq = av * 2 + "px";
										break;
									case "centerLeft":
										aq = 0;
										break;
									case "center":
										aq = av + "px";
										break;
									case "centerRight":
										aq = av * 2 + "px";
										break;
									case "bottomLeft":
										aq = 0;
										break;
									case "bottomCenter":
										aq = av + "px";
										break;
									case "bottomRight":
										aq = av * 2 + "px";
										break
								}
								az.css(
									{
										height: aj,
										"margin-left": aq,
										"margin-right": aq,
										"margin-top": 0,
										position: "absolute",
										visibility: "visible",
										width: ay * ap
									}
								)
							} else {
								var ap = Z / ay;
								var av = (Math.abs( aj - (ar * ap) )) * 0.5;
								switch (aw) {
									case "topLeft":
										at = 0;
										break;
									case "topCenter":
										at = 0;
										break;
									case "topRight":
										at = 0;
										break;
									case "centerLeft":
										at = av + "px";
										break;
									case "center":
										at = av + "px";
										break;
									case "centerRight":
										at = av + "px";
										break;
									case "bottomLeft":
										at = av * 2 + "px";
										break;
									case "bottomCenter":
										at = av * 2 + "px";
										break;
									case "bottomRight":
										at = av * 2 + "px";
										break
								}
								az.css(
									{
										height: ar * ap,
										"margin-left": 0,
										"margin-right": 0,
										"margin-top": at,
										position: "absolute",
										visibility: "visible",
										width: Z
									}
								)
							}
						}
					}
				)
			}
			if (an == true) {
				clearTimeout( h );
				h = setTimeout( u, 200 )
			} else {
				u()
			}
			an = true
		}
		var aa, ac;
		var Y, d, ab, R, n;
		var P, S;
		if (L() && H.mobileAutoAdvance != "") {
			d = H.mobileAutoAdvance
		} else {
			d = H.autoAdvance
		}
		if (d == false) {
			ag.addClass( "paused" )
		}
		if (L() && H.mobileNavHover != "") {
			ab = H.mobileNavHover
		} else {
			ab = H.navigationHover
		}
		if (ag.length != 0) {
			var i = a( ".cameraSlide", b );
			i.wrapInner( '<div class="camerarelative" />' );
			var E;
			var A = H.barDirection;
			var U = ae;
			a( "iframe", D ).each(
				function() {
					var h = a( this );
					var w = h.attr( "src" );
					h.attr( "data-src", w );
					var u = h.parent().index( ".camera_src > div" );
					a( ".camera_target_content .cameraContent:eq(" + u + ")", ae ).append( h )
				}
			);

			function af() {
				a( "iframe", D ).each(
					function() {
						a( ".camera_caption", D ).show();
						var w = a( this );
						var u = w.attr( "data-src" );
						w.attr( "src", u );
						var aq = H.imagePath + "blank.gif";
						var h  = new Image();
						h.src  = aq;
						if (H.height.indexOf( "%" ) != -1) {
							var ap = Math.round( Z / (100 / parseFloat( H.height )) );
							if (H.minHeight != "" && ap < parseFloat( H.minHeight )) {
								aj = parseFloat( H.minHeight )
							} else {
								aj = ap
							}
						} else {
							if (H.height == "auto") {
								aj = ae.height()
							} else {
								aj = parseFloat( H.height )
							}
						}
						w.after(
							a( h ).attr(
								{
									"class": "imgFake",
									width: Z,
									height: aj
								}
							)
						);
						var ar = w.clone();
						w.remove();
						a( h ).bind(
							"click",
							function() {
								if (a( this ).css( "position" ) == "absolute") {
									a( this ).remove();
									if (u.indexOf( "vimeo" ) != -1 || u.indexOf( "youtube" ) != -1) {
										if (u.indexOf( "?" ) != -1) {
											autoplay = "&autoplay=1"
										} else {
											autoplay = "?autoplay=1"
										}
									} else {
										if (u.indexOf( "dailymotion" ) != -1) {
											if (u.indexOf( "?" ) != -1) {
												autoplay = "&autoPlay=1"
											} else {
												autoplay = "?autoPlay=1"
											}
										}
									}
									ar.attr( "src", u + autoplay );
									S = true
								} else {
									a( this ).css(
										{
											position: "absolute",
											top: 0,
											left: 0,
											zIndex: 10
										}
									).after( ar );
									ar.css(
										{
											position: "absolute",
											top: 0,
											left: 0,
											zIndex: 9
										}
									)
								}
							}
						)
					}
				)
			}
			af();
			if (H.hover == true) {
				if ( ! L()) {
					D.hover(
						function() {
							ag.addClass( "hovered" )
						},
						function() {
							ag.removeClass( "hovered" )
						}
					)
				}
			}
			if (ab == true) {
				a( am, ae ).animate(
					{
						opacity: 0
					},
					0
				);
				a( r, ae ).animate(
					{
						opacity: 0
					},
					0
				);
				a( R, ae ).animate(
					{
						opacity: 0
					},
					0
				);
				if (L()) {
					a( document ).on(
						"vmouseover",
						W,
						function() {
							a( am, ae ).animate(
								{
									opacity: 1
								},
								200
							);
							a( r, ae ).animate(
								{
									opacity: 1
								},
								200
							);
							a( R, ae ).animate(
								{
									opacity: 1
								},
								200
							)
						}
					);
					a( document ).on(
						"vmouseout",
						W,
						function() {
							a( am, ae ).delay( 500 ).animate(
								{
									opacity: 0
								},
								200
							);
							a( r, ae ).delay( 500 ).animate(
								{
									opacity: 0
								},
								200
							);
							a( R, ae ).delay( 500 ).animate(
								{
									opacity: 0
								},
								200
							)
						}
					)
				} else {
					D.hover(
						function() {
							a( am, ae ).animate(
								{
									opacity: 1
								},
								200
							);
							a( r, ae ).animate(
								{
									opacity: 1
								},
								200
							);
							a( R, ae ).animate(
								{
									opacity: 1
								},
								200
							)
						},
						function() {
							a( am, ae ).animate(
								{
									opacity: 0
								},
								200
							);
							a( r, ae ).animate(
								{
									opacity: 0
								},
								200
							);
							a( R, ae ).animate(
								{
									opacity: 0
								},
								200
							)
						}
					)
				}
			}
			U.on(
				"click",
				".camera_stop",
				function() {
					d = false;
					ag.addClass( "paused" );
					if (a( ".camera_stop", U ).length) {
						a( ".camera_stop", U ).hide();
						a( ".camera_play", U ).show();
						if (C != "none") {
							a( "#" + q ).hide()
						}
					} else {
						if (C != "none") {
							a( "#" + q ).hide()
						}
					}
				}
			);
			U.on(
				"click",
				".camera_play",
				function() {
					d = true;
					ag.removeClass( "paused" );
					if (a( ".camera_play", U ).length) {
						a( ".camera_play", U ).hide();
						a( ".camera_stop", U ).show();
						if (C != "none") {
							a( "#" + q ).show()
						}
					} else {
						if (C != "none") {
							a( "#" + q ).show()
						}
					}
				}
			);
			if (H.pauseOnClick == true) {
				a( ".camera_target_content", D ).mouseup(
					function() {
						d = false;
						ag.addClass( "paused" );
						a( ".camera_stop", U ).hide();
						a( ".camera_play", U ).show();
						a( "#" + q ).hide()
					}
				)
			}
			a( ".cameraContent, .imgFake", D ).hover(
				function() {
					P = true
				},
				function() {
					P = false
				}
			);
			a( ".cameraContent, .imgFake", D ).bind(
				"click",
				function() {
					if (S == true && P == true) {
						d = false;
						a( ".camera_caption", D ).hide();
						ag.addClass( "paused" );
						a( ".camera_stop", U ).hide();
						a( ".camera_play", U ).show();
						a( "#" + q ).hide()
					}
				}
			)
		}

		function Q(u) {
			for (var w, h, ap = u.length; ap; w = parseInt( Math.random() * ap ), h = u[--ap], u[ap] = u[w], u[w] = h) {
			}
			return u
		}

		function x(h) {
			return Math.ceil( h ) == Math.floor( h )
		}
		if (C != "pie") {
			ah.append( '<span class="camera_bar_cont" />' );
			a( ".camera_bar_cont", ah ).animate(
				{
					opacity: H.loaderOpacity
				},
				0
			).css(
				{
					position: "absolute",
					left: 0,
					right: 0,
					top: 0,
					bottom: 0,
					"background-color": H.loaderBgColor
					}
			).append( '<span id="' + q + '" />' );
			a( "#" + q ).animate(
				{
					opacity: 0
				},
				0
			);
			var l = a( "#" + q );
			l.css(
				{
					position: "absolute",
					"background-color": H.loaderColor
				}
			);
			switch (H.barPosition) {
				case "left":
					ah.css(
						{
							right: "auto",
							width: H.loaderStroke
						}
					);
					break;
				case "right":
					ah.css(
						{
							left: "auto",
							width: H.loaderStroke
						}
					);
					break;
				case "top":
					ah.css(
						{
							bottom: "auto",
							height: H.loaderStroke
						}
					);
					break;
				case "bottom":
					ah.css(
						{
							top: "auto",
							height: H.loaderStroke
						}
					);
					break
			}
			switch (A) {
				case "leftToRight":
					l.css(
						{
							left: 0,
							right: 0,
							top: H.loaderPadding,
							bottom: H.loaderPadding
						}
					);
					break;
				case "rightToLeft":
					l.css(
						{
							left: 0,
							right: 0,
							top: H.loaderPadding,
							bottom: H.loaderPadding
						}
					);
					break;
				case "topToBottom":
					l.css(
						{
							left: H.loaderPadding,
							right: H.loaderPadding,
							top: 0,
							bottom: 0
						}
					);
					break;
				case "bottomToTop":
					l.css(
						{
							left: H.loaderPadding,
							right: H.loaderPadding,
							top: 0,
							bottom: 0
						}
					);
					break
			}
		} else {
			p.append( '<canvas id="' + q + '"></canvas>' );
			var ad;
			var l = document.getElementById( q );
			l.setAttribute( "width", H.pieDiameter );
			l.setAttribute( "height", H.pieDiameter );
			var ao;
			switch (H.piePosition) {
				case "leftTop":
					ao = "left:0; top:0;";
					break;
				case "rightTop":
					ao = "right:0; top:0;";
					break;
				case "leftBottom":
					ao = "left:0; bottom:0;";
					break;
				case "rightBottom":
					ao = "right:0; bottom:0;";
					break
			}
			l.setAttribute( "style", "position:absolute; z-index:1002; " + ao );
			var g;
			var f;
			if (l && l.getContext) {
				var B = l.getContext( "2d" );
				B.rotate( Math.PI * (3 / 2) );
				B.translate( -H.pieDiameter, 0 )
			}
		}
		if (C == "none" || d == false) {
			a( "#" + q ).hide();
			a( ".camera_canvas_wrap", U ).hide()
		}
		if (a( n ).length) {
			a( n ).append( '<ul class="camera_pag_ul" />' );
			var O;
			for (O = 0; O < y; O++) {
				a( ".camera_pag_ul", ae ).append( '<li class="pag_nav_' + O + '" style="position:relative; z-index:1002"><span><span>' + O + "</span></span></li>" )
			}
			a( ".camera_pag_ul li", ae ).hover(
				function() {
					a( this ).addClass( "camera_hover" );
					if (a( ".camera_thumb", this ).length) {
						var u = a( ".camera_thumb", this ).outerWidth(),
						w     = a( ".camera_thumb", this ).outerHeight(),
						h     = a( this ).outerWidth();
						a( ".camera_thumb", this ).show().css(
							{
								top: "-" + w + "px",
								left: "-" + (u - h) / 2 + "px"
							}
						).animate(
							{
								opacity: 1,
								"margin-top": "-3px"
								},
							200
						);
						a( ".thumb_arrow", this ).show().animate(
							{
								opacity: 1,
								"margin-top": "-3px"
							},
							200
						)
					}
				},
				function() {
					a( this ).removeClass( "camera_hover" );
					a( ".camera_thumb", this ).animate(
						{
							"margin-top": "-20px",
							opacity: 0
						},
						200,
						function() {
							a( this ).css(
								{
									marginTop: "5px"
								}
							).hide()
						}
					);
					a( ".thumb_arrow", this ).animate(
						{
							"margin-top": "-20px",
							opacity: 0
						},
						200,
						function() {
							a( this ).css(
								{
									marginTop: "5px"
								}
							).hide()
						}
					)
				}
			)
		}
		if (a( M ).length) {
			var al;
			if ( ! a( n ).length) {
				a( M ).append( "<div />" );
				a( M ).before( '<div class="camera_prevThumbs hideNav"><div></div></div>' ).before( '<div class="camera_nextThumbs hideNav"><div></div></div>' );
				a( "> div", M ).append( "<ul />" );
				a.each(
					j,
					function(h, w) {
						if (a( "> div", ag ).eq( h ).attr( "data-thumb" ) != "") {
							var ap = a( "> div", ag ).eq( h ).attr( "data-thumb" ),
							u      = new Image();
							u.src  = ap;
							a( "ul", M ).append( '<li class="pix_thumb pix_thumb_' + h + '" />' );
							a( "li.pix_thumb_" + h, M ).append( a( u ).attr( "class", "camera_thumb" ) )
						}
					}
				)
			} else {
				a.each(
					j,
					function(h, w) {
						if (a( "> div", ag ).eq( h ).attr( "data-thumb" ) != "") {
							var ap = a( "> div", ag ).eq( h ).attr( "data-thumb" ),
							u      = new Image();
							u.src  = ap;
							a( "li.pag_nav_" + h, n ).append(
								a( u ).attr( "class", "camera_thumb" ).css(
									{
										position: "absolute"
									}
								).animate(
									{
										opacity: 0
									},
									0
								)
							);
							a( "li.pag_nav_" + h + " > img", n ).after( '<div class="thumb_arrow" />' );
							a( "li.pag_nav_" + h + " > .thumb_arrow", n ).animate(
								{
									opacity: 0
								},
								0
							)
						}
					}
				);
				ae.css(
					{
						marginBottom: a( n ).outerHeight()
					}
				)
			}
		} else {
			if ( ! a( M ).length && a( n ).length) {
				ae.css(
					{
						marginBottom: a( n ).outerHeight()
					}
				)
			}
		}
		var G = true;

		function I() {
			if (a( M ).length && ! a( n ).length) {
				var w  = a( M ).outerWidth(),
					ap = a( "ul > li", M ).outerWidth(),
					au = a( "li.cameracurrent", M ).length ? a( "li.cameracurrent", M ).position() : "",
					u  = (a( "ul > li", M ).length * a( "ul > li", M ).outerWidth()),
					ar = a( "ul", M ).offset().left,
					at = a( "> div", M ).offset().left,
					h;
				if (ar < 0) {
					h = "-" + (at - ar)
				} else {
					h = at - ar
				}
				if (G == true) {
					a( "ul", M ).width( a( "ul > li", M ).length * a( "ul > li", M ).outerWidth() );
					if (a( M ).length && ! a( n ).lenght) {
						ae.css(
							{
								marginBottom: a( M ).outerHeight()
							}
						)
					}
					z();
					a( "ul", M ).width( a( "ul > li", M ).length * a( "ul > li", M ).outerWidth() );
					if (a( M ).length && ! a( n ).lenght) {
						ae.css(
							{
								marginBottom: a( M ).outerHeight()
							}
						)
					}
				}
				G      = false;
				var aq = a( "li.cameracurrent", M ).length ? au.left : "",
					av = a( "li.cameracurrent", M ).length ? au.left + (a( "li.cameracurrent", M ).outerWidth()) : "";
				if (aq < a( "li.cameracurrent", M ).outerWidth()) {
					aq = 0
				}
				if (av - h > w) {
					if ((aq + w) < u) {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (aq) + "px"
							},
							500,
							z
						)
					} else {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (a( "ul", M ).outerWidth() - w) + "px"
							},
							500,
							z
						)
					}
				} else {
					if (aq - h < 0) {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (aq) + "px"
							},
							500,
							z
						)
					} else {
						a( "ul", M ).css(
							{
								"margin-left": "auto",
								"margin-right": "auto"
							}
						);
						setTimeout( z, 100 )
					}
				}
			}
		}
		if (a( R ).length) {
			a( R ).append( '<div class="camera_play"></div>' ).append( '<div class="camera_stop"></div>' );
			if (d == true) {
				a( ".camera_play", U ).hide();
				a( ".camera_stop", U ).show()
			} else {
				a( ".camera_stop", U ).hide();
				a( ".camera_play", U ).show()
			}
		}

		function K() {
			g     = 0;
			var h = a( ".camera_bar_cont", U ).width(),
				u = a( ".camera_bar_cont", U ).height();
			if (C != "pie") {
				switch (A) {
					case "leftToRight":
						a( "#" + q ).css(
							{
								right: h
							}
						);
						break;
					case "rightToLeft":
						a( "#" + q ).css(
							{
								left: h
							}
						);
						break;
					case "topToBottom":
						a( "#" + q ).css(
							{
								bottom: u
							}
						);
						break;
					case "bottomToTop":
						a( "#" + q ).css(
							{
								top: u
							}
						);
						break
				}
			} else {
				B.clearRect( 0, 0, H.pieDiameter, H.pieDiameter )
			}
		}
		K();
		a( ".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom", D ).each(
			function() {
				a( this ).css( "visibility", "hidden" )
			}
		);
		H.onStartLoading.call( this );
		T();

		function T(aF) {
			ag.addClass( "camerasliding" );
			S      = false;
			var aZ = parseFloat( a( "div.cameraSlide.cameracurrent", b ).index() );
			if (aF > 0) {
				var aK = aF - 1
			} else {
				if (aZ == y - 1) {
					var aK = 0
				} else {
					var aK = aZ + 1
				}
			}
			var u  = a( ".cameraSlide:eq(" + aK + ")", b );
			var aL = a( ".cameraSlide:eq(" + (aK + 1) + ")", b ).addClass( "cameranext" );
			if (aZ != aK + 1) {
				aL.hide()
			}
			a( ".cameraContent", D ).fadeOut( 600 );
			a( ".camera_caption", D ).show();
			a( ".camerarelative", u ).append( a( "> div ", ag ).eq( aK ).find( "> div.camera_effected" ) );
			a( ".camera_target_content .cameraContent:eq(" + aK + ")", ae ).append( a( "> div ", ag ).eq( aK ).find( "> div" ) );
			if ( ! a( ".imgLoaded", u ).length) {
				var aC = X[aK];
				var aJ = new Image();
				aJ.src = aC + "?" + new Date().getTime();
				u.css( "visibility", "hidden" );
				u.prepend( a( aJ ).attr( "class", "imgLoaded" ).css( "visibility", "hidden" ) );
				var au, ar;
				if ( ! a( aJ ).get( 0 ).complete || au == "0" || ar == "0" || typeof au === "undefined" || au === false || typeof ar === "undefined" || ar === false) {
					a( ".camera_loader", ae ).delay( 500 ).fadeIn( 400 );
					aJ.onload = function() {
						au = aJ.naturalWidth;
						ar = aJ.naturalHeight;
						a( aJ ).attr( "data-alignment", o[aK] ).attr( "data-portrait", k[aK] );
						a( aJ ).attr( "width", au );
						a( aJ ).attr( "height", ar );
						b.find( ".cameraSlide_" + aK ).hide().css( "visibility", "visible" );
						v();
						T( aK + 1 )
					}
				}
			} else {
				if (X.length > (aK + 1) && ! a( ".imgLoaded", aL ).length) {
					var at = X[(aK + 1)];
					var aA = new Image();
					aA.src = at + "?" + new Date().getTime();
					aL.prepend( a( aA ).attr( "class", "imgLoaded" ).css( "visibility", "hidden" ) );
					aA.onload = function() {
						au = aA.naturalWidth;
						ar = aA.naturalHeight;
						a( aA ).attr( "data-alignment", o[aK + 1] ).attr( "data-portrait", k[aK + 1] );
						a( aA ).attr( "width", au );
						a( aA ).attr( "height", ar );
						v()
					}
				}
				H.onLoaded.call( this );
				if (a( ".camera_loader", ae ).is( ":visible" )) {
					a( ".camera_loader", ae ).fadeOut( 400 )
				} else {
					a( ".camera_loader", ae ).css(
						{
							visibility: "hidden"
						}
					);
					a( ".camera_loader", ae ).fadeOut(
						400,
						function() {
							a( ".camera_loader", ae ).css(
								{
									visibility: "visible"
								}
							)
						}
					)
				}
				var a0                     = H.rows,
					av                     = H.cols,
					aW                     = 1,
					h                      = 0,
					aD, aX, aI, aB, aN, az = new Array( "simpleFade", "curtainTopLeft", "curtainTopRight", "curtainBottomLeft", "curtainBottomRight", "curtainSliceLeft", "curtainSliceRight", "blindCurtainTopLeft", "blindCurtainTopRight", "blindCurtainBottomLeft", "blindCurtainBottomRight", "blindCurtainSliceBottom", "blindCurtainSliceTop", "stampede", "mosaic", "mosaicReverse", "mosaicRandom", "mosaicSpiral", "mosaicSpiralReverse", "topLeftBottomRight", "bottomRightTopLeft", "bottomLeftTopRight", "topRightBottomLeft", "scrollLeft", "scrollRight", "scrollTop", "scrollBottom", "scrollHorz" );
				marginLeft                 = 0, marginTop = 0, opacityOnGrid = 0;
				if (H.opacityOnGrid == true) {
					opacityOnGrid = 0
				} else {
					opacityOnGrid = 1
				}
				var aw = a( " > div", ag ).eq( aK ).attr( "data-fx" );
				if (L() && H.mobileFx != "" && H.mobileFx != "default") {
					aB = H.mobileFx
				} else {
					if (typeof aw !== "undefined" && aw !== false && aw !== "default") {
						aB = aw
					} else {
						aB = H.fx
					}
				}
				if (aB == "random") {
					aB = Q( az );
					aB = aB[0]
				} else {
					aB = aB;
					if (aB.indexOf( "," ) > 0) {
						aB = aB.replace( / /g, "" );
						aB = aB.split( "," );
						aB = Q( aB );
						aB = aB[0]
					}
				}
				dataEasing   = a( " > div", ag ).eq( aK ).attr( "data-easing" );
				mobileEasing = a( " > div", ag ).eq( aK ).attr( "data-mobileEasing" );
				if (L() && H.mobileEasing != "" && H.mobileEasing != "default") {
					if (typeof mobileEasing !== "undefined" && mobileEasing !== false && mobileEasing !== "default") {
						aN = mobileEasing
					} else {
						aN = H.mobileEasing
					}
				} else {
					if (typeof dataEasing !== "undefined" && dataEasing !== false && dataEasing !== "default") {
						aN = dataEasing
					} else {
						aN = H.easing
					}
				}
				aD = a( " > div", ag ).eq( aK ).attr( "data-slideOn" );
				if (typeof aD !== "undefined" && aD !== false) {
					aT = aD
				} else {
					if (H.slideOn == "random") {
						var aT = new Array( "next", "prev" );
						aT     = Q( aT );
						aT     = aT[0]
					} else {
						aT = H.slideOn
					}
				}
				var aq = a( " > div", ag ).eq( aK ).attr( "data-time" );
				if (typeof aq !== "undefined" && aq !== false && aq !== "") {
					aX = parseFloat( aq )
				} else {
					aX = H.time
				}
				var ap = a( " > div", ag ).eq( aK ).attr( "data-transPeriod" );
				if (typeof ap !== "undefined" && ap !== false && ap !== "") {
					aI = parseFloat( ap )
				} else {
					aI = H.transPeriod
				}
				if ( ! a( ag ).hasClass( "camerastarted" )) {
					aB = "simpleFade";
					aT = "next";
					aN = "";
					aI = 400;
					a( ag ).addClass( "camerastarted" )
				}
				switch (aB) {
					case "simpleFade":
						av = 1;
						a0 = 1;
						break;
					case "curtainTopLeft":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "curtainTopRight":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "curtainBottomLeft":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "curtainBottomRight":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "curtainSliceLeft":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "curtainSliceRight":
						if (H.slicedCols == 0) {
							av = H.cols
						} else {
							av = H.slicedCols
						}
						a0 = 1;
						break;
					case "blindCurtainTopLeft":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "blindCurtainTopRight":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "blindCurtainBottomLeft":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "blindCurtainBottomRight":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "blindCurtainSliceTop":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "blindCurtainSliceBottom":
						if (H.slicedRows == 0) {
							a0 = H.rows
						} else {
							a0 = H.slicedRows
						}
						av = 1;
						break;
					case "stampede":
						h = "-" + aI;
						break;
					case "mosaic":
						h = H.gridDifference;
						break;
					case "mosaicReverse":
						h = H.gridDifference;
						break;
					case "mosaicRandom":
						break;
					case "mosaicSpiral":
						h  = H.gridDifference;
						aW = 1.7;
						break;
					case "mosaicSpiralReverse":
						h  = H.gridDifference;
						aW = 1.7;
						break;
					case "topLeftBottomRight":
						h  = H.gridDifference;
						aW = 6;
						break;
					case "bottomRightTopLeft":
						h  = H.gridDifference;
						aW = 6;
						break;
					case "bottomLeftTopRight":
						h  = H.gridDifference;
						aW = 6;
						break;
					case "topRightBottomLeft":
						h  = H.gridDifference;
						aW = 6;
						break;
					case "scrollLeft":
						av = 1;
						a0 = 1;
						break;
					case "scrollRight":
						av = 1;
						a0 = 1;
						break;
					case "scrollTop":
						av = 1;
						a0 = 1;
						break;
					case "scrollBottom":
						av = 1;
						a0 = 1;
						break;
					case "scrollHorz":
						av = 1;
						a0 = 1;
						break
				}
				var aV = 0;
				var a2 = a0 * av;
				var a1 = Z - (Math.floor( Z / av ) * av);
				var w  = aj - (Math.floor( aj / a0 ) * a0);
				var aE;
				var aM;
				var aG = 0;
				var aP = 0;
				var ay = new Array();
				var aO = new Array();
				var aQ = new Array();
				while (aV < a2) {
					ay.push( aV );
					aO.push( aV );
					F.append( '<div class="cameraappended" style="display:none; overflow:hidden; position:absolute; z-index:1000" />' );
					var ax = a( ".cameraappended:eq(" + aV + ")", b );
					if (aB == "scrollLeft" || aB == "scrollRight" || aB == "scrollTop" || aB == "scrollBottom" || aB == "scrollHorz") {
						i.eq( aK ).clone().show().appendTo( ax )
					} else {
						if (aT == "next") {
							i.eq( aK ).clone().show().appendTo( ax )
						} else {
							i.eq( aZ ).clone().show().appendTo( ax )
						}
					}
					if (aV % av < a1) {
						aE = 1
					} else {
						aE = 0
					}
					if (aV % av == 0) {
						aG = 0
					}
					if (Math.floor( aV / av ) < w) {
						aM = 1
					} else {
						aM = 0
					}
					ax.css(
						{
							height: Math.floor( (aj / a0) + aM + 1 ),
							left: aG,
							top: aP,
							width: Math.floor( (Z / av) + aE + 1 )
						}
					);
					a( "> .cameraSlide", ax ).css(
						{
							height: aj,
							"margin-left": "-" + aG + "px",
							"margin-top": "-" + aP + "px",
							width: Z
						}
					);
					aG = aG + ax.width() - 1;
					if (aV % av == av - 1) {
						aP = aP + ax.height() - 1
					}
					aV++
				}
				switch (aB) {
					case "curtainTopLeft":
						break;
					case "curtainBottomLeft":
						break;
					case "curtainSliceLeft":
						break;
					case "curtainTopRight":
						ay = ay.reverse();
						break;
					case "curtainBottomRight":
						ay = ay.reverse();
						break;
					case "curtainSliceRight":
						ay = ay.reverse();
						break;
					case "blindCurtainTopLeft":
						break;
					case "blindCurtainBottomLeft":
						ay = ay.reverse();
						break;
					case "blindCurtainSliceTop":
						break;
					case "blindCurtainTopRight":
						break;
					case "blindCurtainBottomRight":
						ay = ay.reverse();
						break;
					case "blindCurtainSliceBottom":
						ay = ay.reverse();
						break;
					case "stampede":
						ay = Q( ay );
						break;
					case "mosaic":
						break;
					case "mosaicReverse":
						ay = ay.reverse();
						break;
					case "mosaicRandom":
						ay = Q( ay );
						break;
					case "mosaicSpiral":
						var aH             = a0 / 2,
							aU, aS, aR, aY = 0;
						for (aR = 0; aR < aH; aR++) {
							aS = aR;
							for (aU = aR; aU < av - aR - 1; aU++) {
								aQ[aY++] = aS * av + aU
							}
							aU = av - aR - 1;
							for (aS = aR; aS < a0 - aR - 1; aS++) {
								aQ[aY++] = aS * av + aU
							}
							aS = a0 - aR - 1;
							for (aU = av - aR - 1; aU > aR; aU--) {
								aQ[aY++] = aS * av + aU
							}
							aU = aR;
							for (aS = a0 - aR - 1; aS > aR; aS--) {
								aQ[aY++] = aS * av + aU
							}
						}
						ay = aQ;
						break;
					case "mosaicSpiralReverse":
						var aH             = a0 / 2,
							aU, aS, aR, aY = a2 - 1;
						for (aR = 0; aR < aH; aR++) {
							aS = aR;
							for (aU = aR; aU < av - aR - 1; aU++) {
								aQ[aY--] = aS * av + aU
							}
							aU = av - aR - 1;
							for (aS = aR; aS < a0 - aR - 1; aS++) {
								aQ[aY--] = aS * av + aU
							}
							aS = a0 - aR - 1;
							for (aU = av - aR - 1; aU > aR; aU--) {
								aQ[aY--] = aS * av + aU
							}
							aU = aR;
							for (aS = a0 - aR - 1; aS > aR; aS--) {
								aQ[aY--] = aS * av + aU
							}
						}
						ay = aQ;
						break;
					case "topLeftBottomRight":
						for (var aS = 0; aS < a0; aS++) {
							for (var aU = 0; aU < av; aU++) {
								aQ.push( aU + aS )
							}
						}
						aO = aQ;
						break;
					case "bottomRightTopLeft":
						for (var aS = 0; aS < a0; aS++) {
							for (var aU = 0; aU < av; aU++) {
								aQ.push( aU + aS )
							}
						}
						aO = aQ.reverse();
						break;
					case "bottomLeftTopRight":
						for (var aS = a0; aS > 0; aS--) {
							for (var aU = 0; aU < av; aU++) {
								aQ.push( aU + aS )
							}
						}
						aO = aQ;
						break;
					case "topRightBottomLeft":
						for (var aS = 0; aS < a0; aS++) {
							for (var aU = av; aU > 0; aU--) {
								aQ.push( aU + aS )
							}
						}
						aO = aQ;
						break
				}
				a.each(
					ay,
					function(a3, a5) {
						if (a5 % av < a1) {
							aE = 1
						} else {
							aE = 0
						}
						if (a5 % av == 0) {
							aG = 0
						}
						if (Math.floor( a5 / av ) < w) {
							aM = 1
						} else {
							aM = 0
						}
						switch (aB) {
							case "simpleFade":
								height        = aj;
								width         = Z;
								opacityOnGrid = 0;
								break;
							case "curtainTopLeft":
								height = 0, width = Math.floor( (Z / av) + aE + 1 ), marginTop = "-" + Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "curtainTopRight":
								height = 0, width = Math.floor( (Z / av) + aE + 1 ), marginTop = "-" + Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "curtainBottomLeft":
								height = 0, width = Math.floor( (Z / av) + aE + 1 ), marginTop = Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "curtainBottomRight":
								height = 0, width = Math.floor( (Z / av) + aE + 1 ), marginTop = Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "curtainSliceLeft":
								height = 0, width = Math.floor( (Z / av) + aE + 1 );
								if (a5 % 2 == 0) {
									marginTop = Math.floor( (aj / a0) + aM + 1 ) + "px"
								} else {
									marginTop = "-" + Math.floor( (aj / a0) + aM + 1 ) + "px"
								}
								break;
							case "curtainSliceRight":
								height = 0, width = Math.floor( (Z / av) + aE + 1 );
								if (a5 % 2 == 0) {
									marginTop = Math.floor( (aj / a0) + aM + 1 ) + "px"
								} else {
									marginTop = "-" + Math.floor( (aj / a0) + aM + 1 ) + "px"
								}
								break;
							case "blindCurtainTopLeft":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0, marginLeft = "-" + Math.floor( (Z / av) + aE + 1 ) + "px";
								break;
							case "blindCurtainTopRight":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0, marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px";
								break;
							case "blindCurtainBottomLeft":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0, marginLeft = "-" + Math.floor( (Z / av) + aE + 1 ) + "px";
								break;
							case "blindCurtainBottomRight":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0, marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px";
								break;
							case "blindCurtainSliceBottom":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0;
								if (a5 % 2 == 0) {
									marginLeft = "-" + Math.floor( (Z / av) + aE + 1 ) + "px"
								} else {
									marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px"
								}
								break;
							case "blindCurtainSliceTop":
								height = Math.floor( (aj / a0) + aM + 1 ), width = 0;
								if (a5 % 2 == 0) {
									marginLeft = "-" + Math.floor( (Z / av) + aE + 1 ) + "px"
								} else {
									marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px"
								}
								break;
							case "stampede":
								height     = 0;
								width      = 0;
								marginLeft = (Z * 0.2) * (((a3) % av) - (av - (Math.floor( av / 2 )))) + "px";
								marginTop  = (aj * 0.2) * ((Math.floor( a3 / av ) + 1) - (a0 - (Math.floor( a0 / 2 )))) + "px";
								break;
							case "mosaic":
								height = 0;
								width  = 0;
								break;
							case "mosaicReverse":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px";
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "mosaicRandom":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) * 0.5 + "px";
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) * 0.5 + "px";
								break;
							case "mosaicSpiral":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) * 0.5 + "px";
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) * 0.5 + "px";
								break;
							case "mosaicSpiralReverse":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) * 0.5 + "px";
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) * 0.5 + "px";
								break;
							case "topLeftBottomRight":
								height = 0;
								width  = 0;
								break;
							case "bottomRightTopLeft":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px";
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "bottomLeftTopRight":
								height     = 0;
								width      = 0;
								marginLeft = 0;
								marginTop  = Math.floor( (aj / a0) + aM + 1 ) + "px";
								break;
							case "topRightBottomLeft":
								height     = 0;
								width      = 0;
								marginLeft = Math.floor( (Z / av) + aE + 1 ) + "px";
								marginTop  = 0;
								break;
							case "scrollRight":
								height     = aj;
								width      = Z;
								marginLeft = -Z;
								break;
							case "scrollLeft":
								height     = aj;
								width      = Z;
								marginLeft = Z;
								break;
							case "scrollTop":
								height    = aj;
								width     = Z;
								marginTop = aj;
								break;
							case "scrollBottom":
								height    = aj;
								width     = Z;
								marginTop = -aj;
								break;
							case "scrollHorz":
								height = aj;
								width  = Z;
								if (aZ == 0 && aK == y - 1) {
									marginLeft = -Z
								} else {
									if (aZ < aK || (aZ == y - 1 && aK == 0)) {
										marginLeft = Z
									} else {
										marginLeft = -Z
									}
								}
								break
						}
						var a6 = a( ".cameraappended:eq(" + a5 + ")", b );
						if (typeof aa !== "undefined") {
							clearInterval( aa );
							clearTimeout( ac );
							ac = setTimeout( K, aI + h )
						}
						if (a( n ).length) {
							a( ".camera_pag li", ae ).removeClass( "cameracurrent" );
							a( ".camera_pag li", ae ).eq( aK ).addClass( "cameracurrent" )
						}
						if (a( M ).length) {
							a( "li", M ).removeClass( "cameracurrent" );
							a( "li", M ).eq( aK ).addClass( "cameracurrent" );
							a( "li", M ).not( ".cameracurrent" ).find( "img" ).animate(
								{
									opacity: 0.5
								},
								0
							);
							a( "li.cameracurrent img", M ).animate(
								{
									opacity: 1
								},
								0
							);
							a( "li", M ).hover(
								function() {
									a( "img", this ).stop( true, false ).animate(
										{
											opacity: 1
										},
										150
									)
								},
								function() {
									if ( ! a( this ).hasClass( "cameracurrent" )) {
										a( "img", this ).stop( true, false ).animate(
											{
												opacity: 0.5
											},
											150
										)
									}
								}
							)
						}
						var a7 = parseFloat( aI ) + parseFloat( h );

						function a4() {
							a( this ).addClass( "cameraeased" );
							if (a( ".cameraeased", b ).length >= 0) {
								a( M ).css(
									{
										visibility: "visible"
									}
								)
							}
							if (a( ".cameraeased", b ).length == a2) {
								I();
								a( ".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom", D ).each(
									function() {
										a( this ).css( "visibility", "hidden" )
									}
								);
								i.eq( aK ).show().css( "z-index", "999" ).removeClass( "cameranext" ).addClass( "cameracurrent" );
								i.eq( aZ ).css( "z-index", "1" ).removeClass( "cameracurrent" );
								a( ".cameraContent", D ).eq( aK ).addClass( "cameracurrent" );
								if (aZ >= 0) {
									a( ".cameraContent", D ).eq( aZ ).removeClass( "cameracurrent" )
								}
								H.onEndTransition.call( this );
								if (a( "> div", ag ).eq( aK ).attr( "data-video" ) != "hide" && a( ".cameraContent.cameracurrent .imgFake", D ).length) {
									a( ".cameraContent.cameracurrent .imgFake", D ).click()
								}
								var bb = i.eq( aK ).find( ".fadeIn" ).length;
								var a8 = a( ".cameraContent", D ).eq( aK ).find( ".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom" ).length;
								if (bb != 0) {
									a( ".cameraSlide.cameracurrent .fadeIn", D ).each(
										function() {
											if (a( this ).attr( "data-easing" ) != "") {
												var bh = a( this ).attr( "data-easing" )
											} else {
												var bh = aN
											}
											var bn = a( this );
											if (typeof bn.attr( "data-outerWidth" ) === "undefined" || bn.attr( "data-outerWidth" ) === false || bn.attr( "data-outerWidth" ) === "") {
												var bg = bn.outerWidth();
												bn.attr( "data-outerWidth", bg )
											} else {
												var bg = bn.attr( "data-outerWidth" )
											}
											if (typeof bn.attr( "data-outerHeight" ) === "undefined" || bn.attr( "data-outerHeight" ) === false || bn.attr( "data-outerHeight" ) === "") {
												var bf = bn.outerHeight();
												bn.attr( "data-outerHeight", bf )
											} else {
												var bf = bn.attr( "data-outerHeight" )
											}
											var bj = bn.position();
											var be = bj.left;
											var bk = bj.top;
											var bi = bn.attr( "class" );
											var bd = bn.index();
											var bl = bn.parents( ".camerarelative" ).outerHeight();
											var bm = bn.parents( ".camerarelative" ).outerWidth();
											if (bi.indexOf( "fadeIn" ) != -1) {
												bn.animate(
													{
														opacity: 0
													},
													0
												).css( "visibility", "visible" ).delay( (aX / bb) * (0.1 * (bd - 1)) ).animate(
													{
														opacity: 1
														},
													(aX / bb) * 0.15,
													bh
												)
											} else {
												bn.css( "visibility", "visible" )
											}
										}
									)
								}
								a( ".cameraContent.cameracurrent", D ).show();
								if (a8 != 0) {
									a( ".cameraContent.cameracurrent .moveFromLeft, .cameraContent.cameracurrent .moveFromRight, .cameraContent.cameracurrent .moveFromTop, .cameraContent.cameracurrent .moveFromBottom, .cameraContent.cameracurrent .fadeIn, .cameraContent.cameracurrent .fadeFromLeft, .cameraContent.cameracurrent .fadeFromRight, .cameraContent.cameracurrent .fadeFromTop, .cameraContent.cameracurrent .fadeFromBottom", D ).each(
										function() {
											if (a( this ).attr( "data-easing" ) != "") {
												var be = a( this ).attr( "data-easing" )
											} else {
												var be = aN
											}
											var bf = a( this );
											var bk = bf.position();
											var bi = bk.left;
											var bh = bk.top;
											var bj = bf.attr( "class" );
											var bg = bf.index();
											var bd = bf.outerHeight();
											if (bj.indexOf( "moveFromLeft" ) != -1) {
												bf.css(
													{
														left: "-" + (Z) + "px",
														right: "auto"
													}
												);
												bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
													{
														left: bk.left
													},
													(aX / a8) * 0.15,
													be
												)
											} else {
												if (bj.indexOf( "moveFromRight" ) != -1) {
													bf.css(
														{
															left: Z + "px",
															right: "auto"
														}
													);
													bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
														{
															left: bk.left
														},
														(aX / a8) * 0.15,
														be
													)
												} else {
													if (bj.indexOf( "moveFromTop" ) != -1) {
														bf.css(
															{
																top: "-" + aj + "px",
																bottom: "auto"
															}
														);
														bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
															{
																top: bk.top
															},
															(aX / a8) * 0.15,
															be,
															function() {
																bf.css(
																	{
																		top: "auto",
																		bottom: 0
																	}
																)
															}
														)
													} else {
														if (bj.indexOf( "moveFromBottom" ) != -1) {
															bf.css(
																{
																	top: aj + "px",
																	bottom: "auto"
																}
															);
															bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																{
																	top: bk.top
																},
																(aX / a8) * 0.15,
																be
															)
														} else {
															if (bj.indexOf( "fadeFromLeft" ) != -1) {
																bf.animate(
																	{
																		opacity: 0
																	},
																	0
																).css(
																	{
																		left: "-" + (Z) + "px",
																		right: "auto"
																		}
																);
																bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																	{
																		left: bk.left,
																		opacity: 1
																	},
																	(aX / a8) * 0.15,
																	be
																)
															} else {
																if (bj.indexOf( "fadeFromRight" ) != -1) {
																	bf.animate(
																		{
																			opacity: 0
																		},
																		0
																	).css(
																		{
																			left: (Z) + "px",
																			right: "auto"
																			}
																	);
																	bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																		{
																			left: bk.left,
																			opacity: 1
																		},
																		(aX / a8) * 0.15,
																		be
																	)
																} else {
																	if (bj.indexOf( "fadeFromTop" ) != -1) {
																		bf.animate(
																			{
																				opacity: 0
																			},
																			0
																		).css(
																			{
																				top: "-" + (aj) + "px",
																				bottom: "auto"
																				}
																		);
																		bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																			{
																				top: bk.top,
																				opacity: 1
																			},
																			(aX / a8) * 0.15,
																			be,
																			function() {
																				bf.css(
																					{
																						top: "auto",
																						bottom: 0
																					}
																				)
																			}
																		)
																	} else {
																		if (bj.indexOf( "fadeFromBottom" ) != -1) {
																			bf.animate(
																				{
																					opacity: 0
																				},
																				0
																			).css(
																				{
																					bottom: "-" + bd + "px"
																					}
																			);
																			bf.css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																				{
																					bottom: "0",
																					opacity: 1
																				},
																				(aX / a8) * 0.15,
																				be
																			)
																		} else {
																			if (bj.indexOf( "fadeIn" ) != -1) {
																				bf.animate(
																					{
																						opacity: 0
																					},
																					0
																				).css( "visibility", "visible" ).delay( (aX / a8) * (0.1 * (bg - 1)) ).animate(
																					{
																						opacity: 1
																						},
																					(aX / a8) * 0.15,
																					be
																				)
																			} else {
																				bf.css( "visibility", "visible" )
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									)
								}
								a( ".cameraappended", b ).remove();
								ag.removeClass( "camerasliding" );
								i.eq( aZ ).hide();
								var a9 = a( ".camera_bar_cont", U ).width(),
								bc     = a( ".camera_bar_cont", U ).height(),
								ba;
								if (C != "pie") {
									ba = 0.05
								} else {
									ba = 0.005
								}
								a( "#" + q ).animate(
									{
										opacity: H.loaderOpacity
									},
									200
								);
								aa = setInterval(
									function() {
										if (ag.hasClass( "stopped" )) {
											clearInterval( aa )
										}
										if (C != "pie") {
											if (g <= 1.002 && ! ag.hasClass( "stopped" ) && ! ag.hasClass( "paused" ) && ! ag.hasClass( "hovered" )) {
												g = (g + ba)
											} else {
												if (g <= 1 && (ag.hasClass( "stopped" ) || ag.hasClass( "paused" ) || ag.hasClass( "stopped" ) || ag.hasClass( "hovered" ))) {
													g = g
												} else {
													if ( ! ag.hasClass( "stopped" ) && ! ag.hasClass( "paused" ) && ! ag.hasClass( "hovered" )) {
														clearInterval( aa );
														af();
														a( "#" + q ).animate(
															{
																opacity: 0
															},
															200,
															function() {
																clearTimeout( ac );
																ac = setTimeout( K, a7 );
																T();
																H.onStartLoading.call( this )
															}
														)
													}
												}
											}
											switch (A) {
												case "leftToRight":
													a( "#" + q ).animate(
														{
															right: a9 - (a9 * g)
														},
														(aX * ba),
														"linear"
													);
													break;
												case "rightToLeft":
													a( "#" + q ).animate(
														{
															left: a9 - (a9 * g)
														},
														(aX * ba),
														"linear"
													);
													break;
												case "topToBottom":
													a( "#" + q ).animate(
														{
															bottom: bc - (bc * g)
														},
														(aX * ba),
														"linear"
													);
													break;
												case "bottomToTop":
													a( "#" + q ).animate(
														{
															bottom: bc - (bc * g)
														},
														(aX * ba),
														"linear"
													);
													break
											}
										} else {
											f = g;
											B.clearRect( 0, 0, H.pieDiameter, H.pieDiameter );
											B.globalCompositeOperation = "destination-over";
											B.beginPath();
											B.arc( (H.pieDiameter) / 2, (H.pieDiameter) / 2, (H.pieDiameter) / 2 - H.loaderStroke, 0, Math.PI * 2, false );
											B.lineWidth   = H.loaderStroke;
											B.strokeStyle = H.loaderBgColor;
											B.stroke();
											B.closePath();
											B.globalCompositeOperation = "source-over";
											B.beginPath();
											B.arc( (H.pieDiameter) / 2, (H.pieDiameter) / 2, (H.pieDiameter) / 2 - H.loaderStroke, 0, Math.PI * 2 * f, false );
											B.lineWidth   = H.loaderStroke - (H.loaderPadding * 2);
											B.strokeStyle = H.loaderColor;
											B.stroke();
											B.closePath();
											if (g <= 1.002 && ! ag.hasClass( "stopped" ) && ! ag.hasClass( "paused" ) && ! ag.hasClass( "hovered" )) {
												g = (g + ba)
											} else {
												if (g <= 1 && (ag.hasClass( "stopped" ) || ag.hasClass( "paused" ) || ag.hasClass( "hovered" ))) {
													g = g
												} else {
													if ( ! ag.hasClass( "stopped" ) && ! ag.hasClass( "paused" ) && ! ag.hasClass( "hovered" )) {
														clearInterval( aa );
														af();
														a( "#" + q + ", .camera_canvas_wrap", U ).animate(
															{
																opacity: 0
															},
															200,
															function() {
																clearTimeout( ac );
																ac = setTimeout( K, a7 );
																T();
																H.onStartLoading.call( this )
															}
														)
													}
												}
											}
										}
									},
									aX * ba
								)
							}
						}
						if (aB == "scrollLeft" || aB == "scrollRight" || aB == "scrollTop" || aB == "scrollBottom" || aB == "scrollHorz") {
							H.onStartTransition.call( this );
							a7 = 0;
							a6.delay( (((aI + h) / a2) * aO[a3] * aW) * 0.5 ).css(
								{
									display: "block",
									height: height,
									"margin-left": marginLeft,
									"margin-top": marginTop,
									width: width
								}
							).animate(
								{
									height: Math.floor( (aj / a0) + aM + 1 ),
									"margin-top": 0,
									"margin-left": 0,
									width: Math.floor( (Z / av) + aE + 1 )
									},
								(aI - h),
								aN,
								a4
							);
							i.eq( aZ ).delay( (((aI + h) / a2) * aO[a3] * aW) * 0.5 ).animate(
								{
									"margin-left": marginLeft * (-1),
									"margin-top": marginTop * (-1)
								},
								(aI - h),
								aN,
								function() {
									a( this ).css(
										{
											"margin-top": 0,
											"margin-left": 0
										}
									)
								}
							)
						} else {
							H.onStartTransition.call( this );
							a7 = parseFloat( aI ) + parseFloat( h );
							if (aT == "next") {
								a6.delay( (((aI + h) / a2) * aO[a3] * aW) * 0.5 ).css(
									{
										display: "block",
										height: height,
										"margin-left": marginLeft,
										"margin-top": marginTop,
										width: width,
										opacity: opacityOnGrid
									}
								).animate(
									{
										height: Math.floor( (aj / a0) + aM + 1 ),
										"margin-top": 0,
										"margin-left": 0,
										opacity: 1,
										width: Math.floor( (Z / av) + aE + 1 )
										},
									(aI - h),
									aN,
									a4
								)
							} else {
								i.eq( aK ).show().css( "z-index", "999" ).addClass( "cameracurrent" );
								i.eq( aZ ).css( "z-index", "1" ).removeClass( "cameracurrent" );
								a( ".cameraContent", D ).eq( aK ).addClass( "cameracurrent" );
								a( ".cameraContent", D ).eq( aZ ).removeClass( "cameracurrent" );
								a6.delay( (((aI + h) / a2) * aO[a3] * aW) * 0.5 ).css(
									{
										display: "block",
										height: Math.floor( (aj / a0) + aM + 1 ),
										"margin-top": 0,
										"margin-left": 0,
										opacity: 1,
										width: Math.floor( (Z / av) + aE + 1 )
									}
								).animate(
									{
										height: height,
										"margin-left": marginLeft,
										"margin-top": marginTop,
										width: width,
										opacity: opacityOnGrid
									},
									(aI - h),
									aN,
									a4
								)
							}
						}
					}
				)
			}
		}
		if (a( am ).length) {
			a( am ).click(
				function() {
					if ( ! ag.hasClass( "camerasliding" )) {
						var h = parseFloat( a( ".cameraSlide.cameracurrent", b ).index() );
						clearInterval( aa );
						af();
						a( "#" + q + ", .camera_canvas_wrap", ae ).animate(
							{
								opacity: 0
							},
							0
						);
						K();
						if (h != 0) {
							T( h )
						} else {
							T( y )
						}
						H.onStartLoading.call( this )
					}
				}
			)
		}
		if (a( r ).length) {
			a( r ).click(
				function() {
					if ( ! ag.hasClass( "camerasliding" )) {
						var h = parseFloat( a( ".cameraSlide.cameracurrent", b ).index() );
						clearInterval( aa );
						af();
						a( "#" + q + ", .camera_canvas_wrap", U ).animate(
							{
								opacity: 0
							},
							0
						);
						K();
						if (h == y - 1) {
							T( 1 )
						} else {
							T( h + 2 )
						}
						H.onStartLoading.call( this )
					}
				}
			)
		}
		if (L()) {
			D.bind(
				"swipeleft",
				function(h) {
					if ( ! ag.hasClass( "camerasliding" )) {
						var u = parseFloat( a( ".cameraSlide.cameracurrent", b ).index() );
						clearInterval( aa );
						af();
						a( "#" + q + ", .camera_canvas_wrap", U ).animate(
							{
								opacity: 0
							},
							0
						);
						K();
						if (u == y - 1) {
							T( 1 )
						} else {
							T( u + 2 )
						}
						H.onStartLoading.call( this )
					}
				}
			);
			D.bind(
				"swiperight",
				function(h) {
					if ( ! ag.hasClass( "camerasliding" )) {
						var u = parseFloat( a( ".cameraSlide.cameracurrent", b ).index() );
						clearInterval( aa );
						af();
						a( "#" + q + ", .camera_canvas_wrap", U ).animate(
							{
								opacity: 0
							},
							0
						);
						K();
						if (u != 0) {
							T( u )
						} else {
							T( y )
						}
						H.onStartLoading.call( this )
					}
				}
			)
		}
		if (a( n ).length) {
			a( ".camera_pag li", ae ).click(
				function() {
					if ( ! ag.hasClass( "camerasliding" )) {
						var u = parseFloat( a( this ).index() );
						var h = parseFloat( a( ".cameraSlide.cameracurrent", b ).index() );
						if (u != h) {
							clearInterval( aa );
							af();
							a( "#" + q + ", .camera_canvas_wrap", U ).animate(
								{
									opacity: 0
								},
								0
							);
							K();
							T( u + 1 );
							H.onStartLoading.call( this )
						}
					}
				}
			)
		}
		if (a( M ).length) {
			a( ".pix_thumb img", M ).click(
				function() {
					if ( ! ag.hasClass( "camerasliding" )) {
						var u = parseFloat( a( this ).parents( "li" ).index() );
						var h = parseFloat( a( ".cameracurrent", b ).index() );
						if (u != h) {
							clearInterval( aa );
							af();
							a( "#" + q + ", .camera_canvas_wrap", U ).animate(
								{
									opacity: 0
								},
								0
							);
							a( ".pix_thumb", M ).removeClass( "cameracurrent" );
							a( this ).parents( "li" ).addClass( "cameracurrent" );
							K();
							T( u + 1 );
							I();
							H.onStartLoading.call( this )
						}
					}
				}
			);
			a( ".camera_thumbs_cont .camera_prevThumbs", U ).hover(
				function() {
					a( this ).stop( true, false ).animate(
						{
							opacity: 1
						},
						250
					)
				},
				function() {
					a( this ).stop( true, false ).animate(
						{
							opacity: 0.7
						},
						250
					)
				}
			);
			a( ".camera_prevThumbs", U ).click(
				function() {
					var ap = 0,
					w      = a( M ).outerWidth(),
					h      = a( "ul", M ).offset().left,
					u      = a( "> div", M ).offset().left,
					aq     = u - h;
					a( ".camera_visThumb", M ).each(
						function() {
							var ar = a( this ).outerWidth();
							ap     = ap + ar
						}
					);
					if (aq - ap > 0) {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (aq - ap) + "px"
							},
							500,
							z
						)
					} else {
						a( "ul", M ).animate(
							{
								"margin-left": 0
							},
							500,
							z
						)
					}
				}
			);
			a( ".camera_thumbs_cont .camera_nextThumbs", U ).hover(
				function() {
					a( this ).stop( true, false ).animate(
						{
							opacity: 1
						},
						250
					)
				},
				function() {
					a( this ).stop( true, false ).animate(
						{
							opacity: 0.7
						},
						250
					)
				}
			);
			a( ".camera_nextThumbs", U ).click(
				function() {
					var aq = 0,
					ap     = a( M ).outerWidth(),
					h      = a( "ul", M ).outerWidth(),
					u      = a( "ul", M ).offset().left,
					w      = a( "> div", M ).offset().left,
					ar     = w - u;
					a( ".camera_visThumb", M ).each(
						function() {
							var at = a( this ).outerWidth();
							aq     = aq + at
						}
					);
					if (ar + aq + aq < h) {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (ar + aq) + "px"
							},
							500,
							z
						)
					} else {
						a( "ul", M ).animate(
							{
								"margin-left": "-" + (h - ap) + "px"
							},
							500,
							z
						)
					}
				}
			)
		}
	}
})( jQuery );
(function(a) {
	a.fn.cameraStop = function() {
		var b = a( this ),
			c = a( ".camera_src", b ),
			e = "pie_" + b.index();
		c.addClass( "stopped" );
		if (a( ".camera_showcommands" ).length) {
			var d = a( ".camera_thumbs_wrap", b )
		} else {
			var d = b
		}
	}
})( jQuery );
(function(a) {
	a.fn.cameraPause = function() {
		var b = a( this );
		var c = a( ".camera_src", b );
		c.addClass( "paused" )
	}
})( jQuery );
(function(a) {
	a.fn.cameraResume = function() {
		var b = a( this );
		var c = a( ".camera_src", b );
		if (typeof autoAdv === "undefined" || autoAdv !== true) {
			c.removeClass( "paused" )
		}
	}
})( jQuery );
