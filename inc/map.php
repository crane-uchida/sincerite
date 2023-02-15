<div class="map">

  <?php /* ?> //apiを使わない通常の地図
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12965.844118697942!2d139.7084979!3d35.6656485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x440e6e43075ece47!2z44K144Oz44K744Oq44OG6Z2S5bGxIOe1kOWpmuebuOirh-aJgA!5e0!3m2!1sja!2sjp!4v1644895315770!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <?php */ ?>

  <style>
  .gm-style-mtc{ /* 地図のタイトル非表示 */
    display: none;
  }
  </style>

  <script async src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDG1w7am_338bO-1sZuc0DRIbEPHmlJ5g&callback=initMap"></script>

  <script type="text/javascript">
    function initMap() {

      var latlng = new google.maps.LatLng(35.66568439784546, 139.70849878590658);/* 座標を入れる */
      var myOptions = {
        zoom: 15, /*拡大比率 値が大きいと詳細に表示され、値が小さいと俯瞰*/
        scrollwheel: false, /* スクロールを無効化 */
        streetViewControl:false, /*ストリートビューを表示させない*/
        center: latlng, /*表示枠内の中心を軸にする*/
        mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
      };
      var map = new google.maps.Map(document.getElementById('js-access-map'), myOptions);

      /*アイコン設定*/
      var markerOptions = {
        position: latlng,
        map: map,
        icon: {
              url: '<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_pin.png', /*アイコンまでのパス*/
              scaledSize : new google.maps.Size(35, 50) /*アイコンのサイズ*/
          },
        title: 'サンセリテ青山 結婚相談所',/*タイトル*/
        //animation: google.maps.Animation.DROP /*アニメーションしたいなら*/
      };
      var marker = new google.maps.Marker(markerOptions);

      /*地図の表示をカスタマイズ 以下は白黒の例*/
      /*========= monochrome =========*/
      var mapStyle = [ {
          "stylers": [ {
          "saturation": -100
          } ]
      } ];
      var mapType = new google.maps.StyledMapType(mapStyle);
          map.mapTypes.set( 'GrayScaleMap', mapType);
          map.setMapTypeId( 'GrayScaleMap' );
      /*========= monochrome =========*/

      //吹き出し（情報ウィンドウ）作成
      var infoWindow = new google.maps.InfoWindow({
        position: map.getCenter(),
        content: '<div class="infoWindowText">サンセリテ青山 結婚相談所<a href="https://www.google.com/maps?ll=35.665649,139.708498&z=14&t=m&hl=ja&gl=JP&mapclient=embed&cid=4903978278418566727" class="enlarge" target="_blank">拡大地図を表示する</a></div>',
        pixelOffset: new google.maps.Size(0, -50)
      })
      infoWindow.open(map);

    };

    //google.maps.event.addDomListener(window, 'load', function() {
    //  initMap();
    //});

  </script>


  <div id="js-access-map" class="p-access__map"></div>


</div>
