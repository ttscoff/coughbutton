# CoughButton

A little ditty by Brett Terpstra  
<http://ttscoff.github.com/coughbutton/>

## Purpose

CoughButton is a small PHP script and iPhone-friendly web app that does one simple thing: mute and unmute Skype with a press-and-hold and tap-to-toggle interface.

> CoughButton used to press opt-F5 on your Mac to toggle [MuteMyMic][1], but toggling without being able to poll for state is just too unreliable, plus it was really only Skype I needed to mute.

[1]: https://itunes.apple.com/pl/app/mutemymic/id456362093?mt=12

CoughButton uses jQuery and the [Hammer.js][2] jQuery plugin to provide a tap-and-hold feature so that your iPhone functions like a real cough button. Press and hold the screen and your mic will be muted, when you let up it will unmute.

[2]: http://eightmedia.github.com/hammer.js/

## Installation

You need a local web server running PHP and a way to load it on your iPhone. This can be done by turning on the apache web server with PHP enabled and setting up a virtual host. If you don't know how to do that, I recommend using [MAMP][3].

[3]: http://www.mamp.info/en/index.html

Unzip the download into a folder in "Sites" in your home directory. Point your virtual host to it and you're ready to go.

Open your virtual host address/port in Mobile Safari on your iPhone. Use the send button at the bottom of the mobile Safari window to "Add to Homescreen." Leave Safari and launch the new icon it creates.

## Usage

Skype can only mute the mic while a call is active. Once you have a call started, tap and hold your iPhone screen and you should see the Skype notification that the mic is muted, unmuting when you release.

To toggle, just tap lightly once. This will hard switch between muted and unmuted.

If you're barefoot and don't mind touching your iPhone with your feet, it makes a decent foot pedal, too.
