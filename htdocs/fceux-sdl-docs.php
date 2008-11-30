<?php
	$title = "General Documentation";
	include("header.php");
?>


<html>
 <head>
  <title>FCEUX SDL Documentation</title>
 </head>
 <body>
  <center><h1>FCEUX SDL Documentation</h1></center>
  <center><i>Last updated November 30, 2008<br />Valid as of FCEUX 2.0.3</i><br>
  <b>Please note that this document is INCOMPLETE and may be INACCURATE.
  Contributions welcome.</b></center>
 <p>
 <b>Table of Contents:</b>
 <ul>
  <li /><a href="#intro">Introduction</a>
   <li /><a href="#features-input">Input</a>
   <li /><a href="#features-input-zapper">Zapper</a>
   <li /><a href="#features-expansion-fds">Famicom Disk System</a>
   <li /><a href="#features-expansion-genie">Game Genie</a>
   <li /><a href="#features-expansion-vs">VS Unisystem</a>
   </ul>
   <li /><a href="#features-ips">Automatic IPS Patching</a>
  </ul>
  <li /><a href="#using">Using FCEUX</a>
  <ul>
   <li /><a href="#using-hotkeys">Hotkey Assignments</a>
   <ul />
    <li /><a href="#using-keys-vs">VS Unisystem</a>
    <li /><a href="#using-keys-fds">Famicom Disk System</a>
    <li /><a href="#using-keys-gamepad">Game Pad</a>
    <li /><a href="#using-keys-powerpad">Power Pad</a>
    <li /><a href="#using-keys-fkb">Family Keyboard</a>
   </ul>
   <li /><a href="#using-cli">Command-line options</a>
   </ul>
  <li /><a href="#credits">Credits</a>
 </ul>
 </p>
 <hr width="100%">
 <a name="intro"><h2>Introduction</h2></a>
 <p> FCEUX is a cross platform, NTSC and PAL Famicom/NES emulator that 
     is an evolution of the original FCE Ultra emulator. Over time FCE 
     Ultra had separated into many separate branches.
 </p>
 <p>The concept behind FCEUX is to merge elements from FCE Ultra, 
 FCEU rerecording, FCEUXD, FCEUXDSP, and FCEU-mm into a single branch 
 of FCEU. As the X implies, it is an all-encompassing FCEU emulator 
 that gives the best of all worlds for the general player, the 
 ROM-hacking community, and the Tool-Assisted Speedrun Community. 
   </p>
 </p>
 <p>
 In several places references are made to the "base directory".  If you
 are running a port on a UN*X-like system(Linux/*BSD/Mac OSX/SunOS/etc.), the
 base directory is "~/.fceux", or in other words, 
"your home directory plus .fceux". 
 </p>
 <hr width="90%">
 <a name="features-input"><h3>Input</h3></a>
 <p>
  FCE Ultra emulates the standard NES gamepad, the Four-Score multiplayer
  adapter, the Zapper, the Power Pad,  and the Arkanoid controller.  The 
  Famicom version of the Arkanoid controller, the "Space Shadow" gun, the 
  Famicom 4-player adapter, and the Family Keyboard are also emulated.
 </p>
 <a name="features-input-zapper"><h4>Zapper</h4></a>
 <p>
        Most Zapper NES games expect the Zapper to be plugged into port 2.
        and most VS Unisystem games expect the Zapper to be plugged
        into port 1.
 </p><p>
        The left mouse button is the emulated trigger button for the
        Zapper.  The right mouse button is also emulated as the trigger,
        but as long as you have the right mouse button held down, no color
        detection will take place, which is effectively like pulling the
        trigger while the Zapper is pointed away from the television screen.
        Note that you must hold the right button down for a short
        time to have the desired effect.
 </p>
 <hr width="90%">
 <a name="features-expansion-fds"><h4>Famicom Disk System</h4></a>
 <p>
        You will need the FDS BIOS ROM image in the base FCEUX directory.
        It must be named "disksys.rom".  FCEUX will not load FDS games
	without this file.
 </p>
        Two types of FDS disk images are supported:  disk images with the
        FWNES-style header, and disk images with no header.  The number
	of sides on headerless disk images is calculated by the total file
	size, so don't put extraneous data at the end of the file.
 <p>
        You should make backups of all of your FDS games you use with 
        FCEUX.  This is because FCEUX will write the disk image back to
        the storage medium, and the disk image in RAM might have been corrupted
        because of inaccurate emulation(this case is not likely to occur, but
        it could occur).
 </p>
 <a name="features-expansion-genie"><h4>Game Genie</h4></a>
 <p>
        The Game Genie ROM image is loaded from the file "gg.rom" in the
        base directory the first time Game Genie emulation is enabled and
        a ROM image is loaded since the time FCEUX has run.
</p><p>
        The ROM image may either be the 24592 byte iNES-format image, or
        the 4352 raw ROM image.
</p><p>
        Remember that enabling/disabling Game Genie emulation will not take
        effect until a new game is loaded(this statement shouldn't concern
        any of the "run once" command-line driven ports).
 </p>
 <a name="features-expansion-vs"><h4>VS Unisystem</h4></a>
 <p>
FCE Ultra currently only supports VS Unisystem ROM images in the
iNES format.  DIP switches and coin insertion are both emulated.  
The following games are supported, and have palettes provided(though not 
necessarily 100% accurate or complete):
	<ul>
         <li />Dr. Mario
         <li />VS Castlevania
	 <li />VS Duck Hunt
         <li />VS Excitebike
         <li />VS Gradius
	 <li />VS Golf
	 <li />VS Hogan's Alley
         <li />VS Ice Climber
         <li />VS Pinball
         <li />VS Platoon
         <li />VS RBI Baseball
         <li />VS Sky Kid
         <li />VS Slalom
	 <li />VS Star Luster
	 <li />VS Stroke and Match Golf
         <li />VS Super Mario Bros
	 <li />VS Tetris
         <li />VS The Goonies
	</ul>
 </p>
 <a name="features-ips"><h3>Automatic IPS Patching</h3></a>
 <p>
        Place the IPS file in the same directory as the file to load,
        and name it filename.ips.
</p>
	<pre>
        Examples:       Boat.nes - Boat.nes.ips
                        Boat.zip - Boat.zip.ips
                        Boat.nes.gz - Boat.nes.gz.ips
                        Boat     - Boat.ips
        </pre>
	<p>
        Some operating systems and environments will hide file extensions.
        Keep this in mind if you are having trouble.
	</p>
	<p>
        Patching is supported for all supported formats(iNES, FDS, UNIF, and
        NSF), but it will probably only be useful for the iNES format.  It
        can be used with the FDS format, but be warned that it will permanently 
        patch your disk image, as the disk image is written back to disk
        when the game is unloaded(unless the disk image is in a zip file, in
        which case it isn't written back to disk).  UNIF files can't be
        patched well with the IPS format because they are chunk-based with no
        fixed offsets.
 </p>
 <hr width="100%">
 <a name="using"><h2>Using FCEUX</h2></a>
 <p>
 
 </p>
 <a name="using-hotkeys"><h3>Hotkey Assignments</h3></a>
 <p>
 <b>NOTE:</b>There is not a GUI available to remap these hotkeys for SDL.  If you really
 want to remap the hotkeys, you can edit the config file manually and replace the values
 with SDL keysyms.  However, hotkey remapping is planned for gfceux in the near future.
 <p>
 <table border>
 <tr><th>Key:</th><th>Action:</th></tr>
 <tr><td>F1</td><td>Quit FCEUX.</td></tr>
 <tr><td>F2</td><td>Cheat menu (command-line only).</td></tr>
 <tr><td>F3</td><td>Load lua scrip.t</td></tr>
 <tr><td>F5</td><td>Save state.</td></tr>
 <tr><td>Shift + F5</td><td>Record FM2 movie.</td></tr>
 <tr><td>Shift + F7</td><td>Playback FM2 movie.</td></tr>
 <tr><td>F7</td><td>Load state.</td></tr>
 <tr><td>0-9</td><td>Select save state slot.</td></tr>
 <tr><td>F12</td><td>Save screen snapshot.</td></tr>
 <tr><td>F11</td><td>Reset.</td></tr>
 <tr><td>-</td>Decrease emulation speed.</td></tr>
 <tr><td>=</td>Increase emulation speed.</td></tr>
 </table>
 </p>
 <a name="using-keys-vs"><h4>VS Unisystem</h4></a>
 <p> 
 Does this work?
 <table border>
 <tr><th>Key:</th><th>Action:</th></tr>
 <tr><td>F8</td><td>Insert coin.</td></tr>
 <tr><td>F6</td><td>Show/Hide dip switches.</td></tr>
 <tr><td>1-8</td><td>Toggle dip switches(when dip switches are shown).</td></tr>
 </table>
 </p> 
 <a name="using-keys-fds"><h4>Famicom Disk System</h4></a>
 <p>
 Does this work?
 <table border>
 <tr><th>Key:</th><th>Action:</th></tr>
 <tr><td>F6</td><td>Select disk and disk side.</td></tr>
 <tr><td>F8</td><td>Eject or Insert disk.</td></tr>
 </table>
 </p>
 <a name="using-keys-gamepad"><h4>Game Pad</h4></a>
 <p>  
 <table border>
 <tr><th>Key:</th><th nowrap>Button on Emulated Gamepad:</th></tr>
 <tr><td>K</td><td>B</td></tr>
 <tr><td>J</td><td>A</td></tr>
 <tr><td>Enter/Return</td><td>Start</td></tr>
 <tr><td>Tab</td><td>Select</td></tr>
 <tr><td>W</td><td>Up</td></tr>
 <tr><td>A</td><td>Left</td></tr>
 <tr><td>S</td><td>Down</td></tr>
 <tr><td>D</td><td>Right</td></tr>
 </table>
 </p> 
 <a name="using-keys-powerpad"><h4>Power Pad</h4></a>
 <p>  
 Does this work?
 <table border>
  <tr><th colspan="4">Side B</th></tr>
  <tr><td width="25%">O</td><td width="25%">P</td>
	<td width="25%">[</td><td width="25%">]</td></tr>
  <tr><td>K</td><td>L</td><td>;</td><td>'</td></tr>
  <tr><td>M</td><td>,</td><td>.</td><td>/</td></tr>
 </table>
 <br />
 <table border>
  <tr><th colspan="4">Side A</th></tr>           
  <tr><td width="25%"></td><td width="25%">P</td>
        <td width="25%">[</td><td width="25%"></td></tr>
  <tr><td>K</td><td>L</td><td>;</td><td>'</td></tr>
  <tr><td></td><td>,</td><td>.</td><td></td></tr>
 </table>
 </p> 
 <a name="using-keys-fkb"><h4>Family Keyboard</h4></a>
 <p>  
         All emulated keys are mapped to the closest open key on the PC
          keyboard, with a few exceptions.  The emulated "@" key is
          mapped to the "`"(grave) key, and the emulated "kana" key
          is mapped to the "Insert" key(in the 3x2 key block above the
          cursor keys).
 </p> 
 <p>
 To enable or disable Family Keyboard input, press the "Scroll Lock" key.
 When Family Keyboard input is enabled, FCE Ultra will also attempt
 to prevent any key presses from being passed to the GUI or system.
 </p>
 <a name="using-cli"><h3>Command-line</h3></a>
 <p>
  FCEUX supports arguments passed on the command line.  Arguments
  are taken in the form of "--parameter value". Most arguments that have
  both a parameter and a value will be saved in the configuration file.
  </p>
  TODO: Many more options.
  <p>
  <table border>
   <tr><th>Argument:</th><th>Value Type:</th><th>Default value:</th><th>Description:</th></tr>
   <tr><td>--pal</td><td>0|1</td><td>0</td><td>Emulate a PAL NES.  Otherwise emulate an NTSC NES.</td></tr>
   <tr><td>--gamegenie</td><td>0|1</td><td>0</td><td>Emulate a gamie genie (gg.rom required).</td></tr>
   <tr><td>--nospritelim</td><td>0|1</td><td>1</td><td>Disbales the 8 sprites per scanline limitation.</td></tr>
   <tr><td>--frameskip</td><td>integer</td><td>0</td><td>Sets number of frames to skip per emulated frame (must be built with frameskip support).</td></tr>
   <tr><td>--palette</td><td>filename</td><td>0</td><td>Load a custom global palette from given file.  Specifying "0" will cause FCEUX to stop using the custom global palette.</td></tr>
   <tr><td>--ntsccolor</td><td>0|1</td><td>0</td><td>Enable NTSC NES colors.</td></tr>

   <tr><td>--sound</td><td>0|1</td><td>1</td><td>Enable sound</td></tr>
   <tr><td>--soundvol x</td><td>integer</td><td>100</td><td>Set sound volume.</td></tr>
   <tr><td>--soundq x</td><td>0|1</td><td>1</td><td>Enable high-quality sound emulation.</td></tr>
   <tr><td>--clipsides</td><td>0|1</td><td>0</td><td>Clip leftmost and rightmost 8 columns of pixels of the video output.</td></tr>
   <tr><td>--slend /td><td>integer</td><td>231</td><td>Last scanline to be rendered.</td></tr>
   <tr><td>--slstart</td><td>integer</td><td>0</td><td>First scanline to be rendered</td></tr>
  </table>
 </p>
 </p>
 
 <a name="credits"><h2>Credits</h2></a>
 <p>
 <table border width="100%">
  <tr><th>Name:</th><th>Contribution(s):</th></tr>
  <tr><td>punkrockguy318</td><td>FCEUX SDL Documentation rewrite.</td></tr>
 </table>
 </p>
 </body>
</html>
