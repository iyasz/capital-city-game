
$('#visitorMap3').vectorMap({
    map: 'indonesia_id',
    backgroundColor: '#ffffff',
    borderColor: '#f2f2f2',
    borderOpacity: .8,
    borderWidth: 1,
    hoverColor: '#000',
    hoverOpacity: .8,
    color: '#ddd',
    normalizeFunction: 'linear',
    selectedRegions: false,
    showTooltip: true,
});

  // document.getElementById("button").addEventListener("click", function() {
  //   document.getElementById("target-button").style.transform = "scale(2)";
  // });

$('#visitorMap3 svg g path').on('click', function() {

  $("#visitorMap3").css("transform", "scale(3)")
  setTimeout(function() {
    window.location.href = "/province/3/capital_city";
  }, 1700);
});
  
