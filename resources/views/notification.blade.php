<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('220a16b4951657f7d612', {
      cluster: 'eu',
      encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('App\\Events\\MyEvent', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
    
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>
    .
  </p>
</body>
