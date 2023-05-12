function slugify(string) {
  return string
    .toLowerCase()
    .replace(/[\s\W-]+/g, '-') 
    .replace(/^-+|-+$/g, ''); 
}

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
    onRegionClick: function(event, code, region){
      var regionName = region;
      console.log(regionName);
    window.location.href = `/province/${slugify(regionName)}/capital_city`;
    }
});

$('#visitorMap3 svg g path').on('click', function() {
  $("#visitorMap3").css("transform", "scale(3)")
  // setTimeout(function() {
  //   window.location.href = `/province/a/capital_city`;
  // }, 1700);
});
  
