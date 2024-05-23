<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- vue js -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
  <div id="app">
    <div class="container col-12 mt-5">
      <div class="row d-flex flex-wrap">
        <div class="col-12 col-md-6 col-lg-4 text-center" v-for="curDisk, index in diskList">
          <div class="card">
            <img :src="curDisk.poster" :alt="curDisk.title">
            <section>
              <h2>{{ curDisk.title }}</h2>
              <h4>{{ curDisk.author }}</h4>
              <p>{{ curDisk.year }}</p>
              <button @click="toggleLike(index)">Like</button>

            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- custom js -->
  <script src="./js/script.js"></script>
</body>

</html>