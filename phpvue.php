<?php
  $number = ['one', 'two', 'three'];
  $one = 2023;
  $ages = array("Peter"=>35, "Ben"=>37, "Joe"=>43);  
?>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<h1>PHP & VUE</h1>

<body>
  <div id="orderform">
    <orderform :orderd="formdata"></orderform>
    <div id="app">{{ message }}
       <div>{{ formdata }}</div>
       <div>{{ number }}</div>
       <div>{{ age.Peter }}</div>
    </div>
  </div>
</body>

<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        formdata: '<?php print json_encode($one) ?>',
        number: '<?php print json_encode($number) ?>',
        age: JSON.parse('<?php echo json_encode($ages) ?>')//passa p obj javascript
      }
    }
  }).mount('#app')
</script>
