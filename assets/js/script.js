

// Form Login
$( "#form_login" ).on( "submit", function( event ) {
	event.preventDefault();
	var username = $('#username').val();
	var password = $('#password').val();
	if(username != '' && password != '') {
		$.post('core.php?do=login', $( this ).serialize()  ,function(resp) {
			if(resp.error == 'true') {
				sweetAlert("Alert.", "Wrong username and password", "error");
			} else {
				window.location.href = 'main.php';
			}
		},'json');
	} else {
		sweetAlert("Alert.", "Please input username and password", "error");
	}
});

function addreview(bookID){
	var star = $('#reviewstar').val();
	var comment = $('#reviewcomment').val();
	$.post('core.php?add=newreview',{ bookID : bookID,star : star, comment : comment},function(resp){
		console.log('OK');
		window.location.href = 'review.php?book='+bookID;
	});

}

function showPreorderOfMember(){
	var id = $('#userID_preorder').val();
	sweetAlert("Loading...", "Select data for user ID "+id, "success");
	$.post('core.php?do=showpreorder',{ userID : id },function(out) {
		console.log(out.data);
		if(out.data.length > 0) {
			var temp = '';
			out.data.reduce(function(result, current) {
			   result[current.saleID] = result[current.saleID] || [];
			   result[current.saleID].push(current);
			   temp = result;
			   return result;
		   	}, {})
			//console.log(temp);
			var count = 0;
			var html_temp = '';
			for(var i in temp) {
				count++;
				html_temp += '<tr>';
				html_temp += '<td style="vertical-align: middle;"><div align="center">'+count+'</div></td>';
				html_temp += '<td >';
				for(var j = 0; j < temp[i].length; j++) {
					console.log(temp[i][j].bookname);
					html_temp += '<b>Name:'+temp[i][j].bookname+'</b><br>Author:'+temp[i][j].author+'<br>Publisher:'+temp[i][j].publisher+'<br>Category:'+temp[i][j].category+'<br>Price:'+temp[i][j].price+'<br><br>';
				}
				html_temp += '</td>';
				html_temp += '<td style="vertical-align: middle;">'+temp[i][0].quantity+'</td>';
				html_temp += '<td style="vertical-align: middle;">'+temp[i][0].orderDate+'</td>';
				if(temp[i][0].recieveDate != null) {
					html_temp += '<td style="vertical-align: middle;">'+temp[i][0].recieveDate+'</td>';
				} else {
					html_temp += '<td style="vertical-align: middle;"><button  class="btn btn-primary" onclick="recieveToday('+temp[i][0].saleID+');">Change to Recieve</button></td>';
				}
				html_temp += '</tr>';
			}
			$('#list_preOrder').html(html_temp);
		} else {
			html_temp += '<tr>';
			html_temp += '<td colspan="5"><div align="center"><b>'+out.message+'</b></div></td>';
			html_temp += '</tr>';
			$('#list_preOrder').html(html_temp);
		}
	},'json');
}
function recieveToday(id){
	$.post('core.php?do=recievetoday',{ saleID : id },function(out) {
		sweetAlert("Success...", "change receive date to today", "success");
		window.location.href = 'editpreorder.php';
		console.log(id);
	});
}
function addwish(book_id)
    {
    	$.post('w_addlist.php',{ book_id : book_id },function(result){

			if(result.error == 'false'){
				swal({
					  title: "Oh!",
					  text: "This book already in your wishlist",
					  type: "info",
					  showCancelButton: true,
					  closeOnConfirm: false,
					  showLoaderOnConfirm: true,
					});
			}
			else{
				sweetAlert("Success", "Add this book to your wishlist", "success");
			}
    	},'json');
    }
