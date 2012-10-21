# CoughButton

A little ditty by Brett Terpstra  
<http://ttscoff.github.com/coughbutton/>

## Purpose

CoughButton is a small PHP script and iPhone-friendly web app that does one simple thing: press opt-F5 on your Mac to toggle [MuteMyMic][1].

[1]: https://itunes.apple.com/pl/app/mutemymic/id456362093?mt=12

CoughButton uses jQuery and the [Hammer.js][2] jQuery plugin to provide a tap-and-hold feature so that your iPhone functions like a real cough button. Press and hold the screen and your mic will be muted, when you let up it will unmute.

[2]: http://eightmedia.github.com/hammer.js/

## Installation

You need a local web server running PHP and a way to load it on your iPhone. This can be done by turning on the apache web server with PHP enabled and setting up a virtual host. If you don't know how to do that, I recommend using [MAMP][3].

[3]: http://www.mamp.info/en/index.html

Unzip the download into a folder in "Sites" in your home directory. Point your virtual host to it and you're ready to go.

You'll also need [MuteMyMic][1] installed and running.

Open your virtual host address/port in Mobile Safari on your iPhone. Use the send button at the bottom of the mobile Safari window to "Add to Homescreen." Leave Safari and launch the new icon it creates.

## Usage

Make sure that MuteMyMic is running and set to unmuted. Tap and hold your screen and you should see the MuteMyMic icon in your menu bar turn red, returning to black when you release.

To toggle, just tap lightly once. This will hard switch between muted and unmuted.

If something goes wrong and the sync between the iPhone screen color and the actual state of MuteMyMic gets off, you can double tap the screen to switch MuteMyMic without changing the state of CoughButton.

If you're barefoot and don't mind touching your iPhone with your feet, it makes a decent foot pedal, too.
