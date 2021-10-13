Vue.config.devtools = true;

const app = new Vue({
  el: "#root",
  data: {
    db: [],
  },
  created: function () {
    axios.get("http://localhost/php-ajax-dischi/api/api.php").then((res) => {
      return (this.db = res.data);
    });
  },
});
