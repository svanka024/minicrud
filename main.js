fetch("https://api.spotify.com/v1/tracks")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data);
  })
