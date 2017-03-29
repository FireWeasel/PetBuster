function loadByAjax() {
  $.ajax({
      type: "GET",
      url: "../engine/search_posts.php",
      data: "searchkey=" + $("#search-box").val(),
      success: function(response_data) {
          $('#container').empty();
          var mainContainer = $('#container');
          var posts = JSON.parse(response_data);
          for(count = 0; count < posts.length; count++) {
            var post = posts[count];
            var postBox = $('<div />');
            var postTitle = $('<div />');
            var link = $('<a />');
            var header = $('<h1 />');
            postBox.addClass("post-box");
            postTitle.addClass("post-title");
            link.attr("href", "post-view.php?id=" + post.id);
            header.addClass("post-title");
            header.attr("id", post.id);
            header.text(post.title);
            link.html(header);
            postTitle.append(link);
            postBox.append(postTitle);
            postBox.append("<hr>");
            var row = $("<div />");
            var firstCol = $("<div />");
            var lastCol = $("<div />");
            var image = $("<img />");
            var paragraph = $("<p />");
            row.addClass("row");
            firstCol.addClass("col col-lg-3");
            lastCol.addClass("col col-lg-8");
            image.attr("style", "width: 150px; height: 150px;");
            if(post.image_location != "") {
              image.attr("src", post.image_location);
            } else {
              image.attr("src", "../images/Post-image.jpg");
            }
            paragraph.attr("id", "p_description");
            paragraph.text(post.description);
            lastCol.append(paragraph);
            firstCol.append(image);
            row.append(firstCol);
            row.append(lastCol);
            postBox.append(row);
            mainContainer.append(postBox);
          }
      }
  });
}
