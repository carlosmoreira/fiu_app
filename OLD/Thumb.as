﻿package {   import fl.controls.listClasses.ICellRenderer;   import fl.controls.listClasses.ImageCell;   import fl.controls.TileList;   import flash.text.*;      public class Thumb extends ImageCell implements ICellRenderer {   private var desc:TextField;   private var textStyle:TextFormat;public function Thumb() {   super();   loader.scaleContent = false;   useHandCursor = true;   // set skins //  setStyle("upSkin", ThumbCellBg);   //setStyle("downSkin", ThumbCellBg);//   setStyle("overSkin", ThumbCellBgOver); //   setStyle("selectedUpSkin", ThumbCellBgSelected);//   setStyle("selectedDownSkin", ThumbCellBgSelected);//   setStyle("selectedOverSkin", ThumbCellBgSelected);   // Create and format desc   desc = new TextField();   desc.autoSize = TextFieldAutoSize.LEFT;   desc.x = 75;   desc.width = 110;   desc.multiline = true;   desc.wordWrap = true;   addChild(desc);   textStyle = new TextFormat();   textStyle.font = "Tahoma";//   textStyle.color = 0×000000;   textStyle.size = 11;}   }}