# CoughButton

A little ditty by Brett Terpstra

## Purpose

CoughButton is a small PHP script and iPhone-friendly web app that does one simple thing: press opt-F5 on your Mac to toggle [MuteMyMic][1].

[1]: https://itunes.apple.com/pl/app/mutemymic/id456362093?mt=12

CoughButton uses jQuery and the [Hammer.js][2] jQuery plugin to provide a tap-and-hold feature so that your iPhone functions like a real cough button. Press and hold the screen and your mic will be muted, when you let up it will unmute.

[2]: http://eightmedia.github.com/hammer.js/

## Installation

You need a local web server running PHP and a way to load it on your iPhone. This can be done by turning on the apache web server with PHP enabled and setting up a virtual host. If you don't know how to do that, I recommend using [MAMP][3].

[3]: http://www.mamp.info/en/index.html

You'll also need [MuteMyMic][1] installed and running.

## Usage

Open your virtual host address/port on your iPhone. Use the send button at the bottom of the mobile Safari window to "Add to Homescreen." Leave Safari and launch the new icon it creates. Make sure that MuteMyMic is running and set to unmuted. Tap and hold your screen and you should see the MuteMyMic icon in your menu bar turn red, returning to black when you release.

If you're barefoot and don't mind touching your iPhone with your feet, it makes a decent foot pedal, too.
