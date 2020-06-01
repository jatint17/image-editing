var im1,im2;
function uploadfg()
{
  var canfg=document.getElementById("fgc");
  var fin=document.getElementById("fgi");
  im1=new SimpleImage(fin);
  im1.drawTo(canfg);
}
function uploadbg()
{
  var canbg=document.getElementById("bgc");
  var bin=document.getElementById("bgi");
  im2=new SimpleImage(bin);
  im2.drawTo(canbg);
}
function greenscreen()
{
  var cangs=document.getElementById("gsc");
  var out=new SimpleImage(im1.getWidth(),im1.getHeight());
  for(var pixel of im1.values())
    {
      var x=pixel.getX();
      var y=pixel.getY();
      if(pixel.getGreen()>220&&pixel.getRed()<150&&pixel.getBlue()<150)
        {
          var z=im2.getPixel(x,y);
          out.setPixel(x,y,z);
        }
      else
        {
          out.setPixel(x,y,pixel);
        }
    }
  out.drawTo(cangs);
}