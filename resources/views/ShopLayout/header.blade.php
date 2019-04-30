<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        var notificationsEnabled = false;

        function initNotifications()
        {
            if(window.Notification)
            {
                Notification.requestPermission(function(permission){
                    if (permission === 'granted')
                    {
                        notificationsEnabled = true;
                    }
                    else
                    {
                        alert('permission denied');
                    }
                });
            }
            else
            {
                alert('Browser does not support')
            }
        }
        function showNotification() {
            if(notificationsEnabled)
            {
                var notification = new Notification('E CD Store',{
                    body :'Welcome',
                    icon:''
                });
                setTimeout(function(){notification.close();},5000);
            }
            else
            {
                alert('notifications are disabled')
            }

        }

    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-CD Store</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<Br>
<Br>
