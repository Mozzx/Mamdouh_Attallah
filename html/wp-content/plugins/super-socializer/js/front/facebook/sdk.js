window.fbAsyncInit=function(){FB.init({appId:theChampFBKey,channelUrl:theChampSiteUrl+'/channel.html',status:true,cookie:true,xfbml:true});if(typeof theChampDisplayLoginIcon=='function'){theChampDisplayLoginIcon(document,'theChampFacebookButton')}};(function(d){var js,id='facebook-jssdk',ref=d.getElementsByTagName('script')[0];if(d.getElementById(id)){return}js=d.createElement('script');js.id=id;js.async=true;js.src='//connect.facebook.net/'+theChampFBLang+'/all.js';ref.parentNode.insertBefore(js,ref)}(document));