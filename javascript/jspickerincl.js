				jQuery('input.jscolor').jPicker(
					{ 
					
					  window: // used to define the position of the popup window
							  // only useful in binded mode
					  {
						title: null, // any title for the jPicker window itself - displays
									 // "Drag Markers To Pick A Color" if left null
					 effects:
					  {
						type: 'show', /* effect used to show/hide an expandable picker. Acceptable values "slide", "show", "fade" */
						speed:
						{
						  show: 'fast', /* duration of "show" effect. Acceptable values are "fast", "slow", or time in ms */
						  hide: 'fast' /* duration of "hide" effect. Acceptable values are "fast", "slow", or time in ms */
						}
					  },
						position:
						{
						  x: '-200px', // acceptable values "left", "center", "right",
											 // "screenCenter", or relative px value
						  y: '30px', // acceptable values "top", "bottom", "center", or relative px value
						},
						expandable: false, // default to large static picker - set to true to make an
										   // expandable picker (small icon with popup) - set
										   // automatically when binded to input element
						liveUpdate: true, // set false if you want the user to click "OK" before the
										  // binded input box updates values
						alphaSupport: false // set to true to enable alpha picking
					  },
					
					
					  images: 
						{
							clientPath: '/themeframe/javascript/jPicker/images/', // Path to image files
							colorMap: // colorMap size and arrow icon
							{
							  width: 256, // Map width - don't override unless using a smaller image set
							  height: 256, // Map height - don't override unles using a smaller image set
							  arrow:
							  {
								file: 'mappoint.gif', // Arrow icon image file
								width: 15, // Arrow icon width
								height: 15 // Arrow icon height
							  }
							},
							colorBar: // colorBar size and arrow icon
							{
							  width: 20, // Bar width - don't override unless using a smaller image set
							  height: 256, // Bar height - don't override unless using a smaller image set
							  arrow:
							  {
								file: 'rangearrows.gif', // Arrow icon image file
								width: 40, // Arrow icon width
								height: 9 // Arrow icon height
							  }
							},
							picker: // picker icon and size
							{
							  file: 'picker.gif', // Picker icon image file
							  width: 25, // Picker width - don't override unless using a smaller image set
							  height: 24  // Picker height - don't override unless using a smaller image set
							}
						}
					},
					{}, // No 'commit' callback
					function(color, context)
					{
						var hex = color.val('hex');
						jQuery('div.headerimage').css(
							{
							  backgroundColor: hex && '#' + hex || 'transparent'
							}); // prevent IE from throwing exception if hex is empty
					},
					{}  // No 'Cancel' callback
					
				);