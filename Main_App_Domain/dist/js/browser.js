 var date = "123";
            $.ajax({
                url: '../../includes/ajax/browser.php', 
                type: "POST",
                dataType:'text', 
                data: {'date': date},
                success: function(data)                 {
                    console.log("successfully");
                }
            }); 