var image,cangs;
function uploadfg()
{
  var canfg=document.getElementById("fgc");
  var fin=document.getElementById("fgi");
  image=new SimpleImage(fin);
  image.drawTo(canfg);
}
function grayscale()
{
  cangs=document.getElementById("gsc");
  var out=new SimpleImage(image.getWidth(),image.getHeight());
  for(var color of image.values())
  {
    var p=color.getRed()+color.getBlue()+color.getGreen();
    var avg=p/3;
    color.setRed(avg);
    color.setBlue(avg);
    color.setGreen(avg);
  }
  image.drawTo(cangs);
}
function f1()
{
    cangs=document.getElementById("gsc");
  for(var color of image.values())
  {
    var p=77+color.getBlue();
    color.setBlue(p);
    var pp=70+color.getRed();
    color.setRed(pp);
    var ppp=40+color.getGreen();
    color.setGreen(ppp);
  }
  image.drawTo(cangs);
}
function f2()
{
    cangs=document.getElementById("gsc");
  for(var color of image.values())
  {
    var p1=50+color.getBlue();
    color.setBlue(p1);
    var pp2=10+color.getRed();
    color.setRed(pp2);
    var ppp3=05+color.getGreen();
    color.setGreen(ppp3);
  }
  image.drawTo(cangs);
}
