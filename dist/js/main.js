var albumTmp = $("#album-template").html();
var templateAlbum = Handlebars.compile(albumTmp);

$.ajax({
  url: 'server.php',
  method: 'GET',
  success: function (data) {
       console.log(data);
       for (var i = 0; i < data.length; i++) {
           var albumApi = data[i];
           var albumObj = {
               "img": albumApi.pic,
               "title": albumApi.title,
               "artist": albumApi.artist,
               "year": albumApi.year
           }
           var albumTemplate = templateAlbum(albumObj);
           $('.container').append(albumTemplate);
       }
  },
  error: function (error) {
       alert('errore');
  }
});
