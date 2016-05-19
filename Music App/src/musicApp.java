import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JButton;


import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JOptionPane;

import java.io.File;
import java.io.IOException;

import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

import javax.sound.sampled.*;
import java.awt.Dimension;
import java.lang.Boolean;

public class musicApp

{

	static Boolean playing = false;
	static Clip clip;
	public static void main(String[] args) 
	{
		final JFrame window = new JFrame("Torrelle's Music App");
		final JPanel mainPanel = new JPanel();
		mainPanel.setPreferredSize(new Dimension(600, 600));
		window.setResizable(false);
		window.add(mainPanel);
		
		final JButton fadeAway = new JButton("Fade Away");
		fadeAway.addActionListener(new ActionListener () {
			public void actionPerformed(ActionEvent e){
				try 
				{
					// looks to see if a song is playing and if one is, this stops it and closes it
					// then sets the boolean back to false to notify that no song is playing
					if (playing == true)
					{
						clip.stop();
						clip.close();
						playing = false;
					}
					// maybe make your own music folder???
					AudioInputStream aIS = AudioSystem.getAudioInputStream(new File("/Users/TNT/Music/Logic/Logic - The Incredible True Story (2015)/02 Fade Away.wav").getAbsoluteFile());
					clip = AudioSystem.getClip();
					clip.open(aIS);
					clip.start();		
					playing = true;
				}
				catch(Exception ex)
				{
					System.out.println("Error playing music with Sound");
					ex.printStackTrace();
				}
			}
		});
		
		final JButton bigRings = new JButton("Big Rings");
		bigRings.addActionListener(new ActionListener () {
			public void actionPerformed(ActionEvent e){
				try 
				{
					// looks to see if a song is playing and if one is, this stops it and closes it
					// then sets the boolean back to false to notify that no song is playing
					if (playing == true)
					{
						clip.stop();
						clip.close();
						playing = false;
					}
					
					AudioInputStream aIS = AudioSystem.getAudioInputStream(new File("/Users/TNT/Music/Drake and Future/Drake & Future - What a Time To Be Alive [iTunes]/Drake & Future - What a Time To Be Alive [iTunes]/Big Rings.wav").getAbsoluteFile());
					clip = AudioSystem.getClip();
					clip.open(aIS);
					clip.start();
					playing = true;
				}
				catch(Exception ex)
				{
					System.out.println("Error playing music with Sound");
					ex.printStackTrace();
				}
			}
		});
		
		final JButton allYall = new JButton("All Y'all");
		allYall.addActionListener(new ActionListener () {
			public void actionPerformed(ActionEvent e){
				try 
				{
					// looks to see if a song is playing and if one is, this stops it and closes it
					// then sets the boolean back to false to notify that no song is playing
					if (playing == true)
					{
						clip.stop();
						clip.close();
						playing = false;
					}
					AudioInputStream aIS = AudioSystem.getAudioInputStream(new File("/Users/TNT/Music/Childish Gambino/Childish Gambino - STN MTN Kauai Mixtape (DatPiff.com)/All Y'all.wav").getAbsoluteFile());
					clip = AudioSystem.getClip();
					clip.open(aIS);
					clip.start();		
					playing = true;
				}
				catch(Exception ex)
				{
					System.out.println("Error playing music with Sound");
					ex.printStackTrace();
				}
			}
		});
		
		final JButton dollarCost = new JButton("How Much A Dollar Cost");
		dollarCost.addActionListener(new ActionListener () {
			public void actionPerformed(ActionEvent e){
				try 
				{
					// looks to see if a song is playing and if one is, this stops it and closes it
					// then sets the boolean back to false to notify that no song is playing
					if (playing == true)
					{
						clip.stop();
						clip.close();
						playing = false;
					}
					AudioInputStream aIS = AudioSystem.getAudioInputStream(new File("/Users/TNT/Music/Kendrick Lamar/To Pimp a Butterfly/How Much A Dollar Cost.wav").getAbsoluteFile());
					clip = AudioSystem.getClip();
					clip.open(aIS);
					clip.start();		
					playing = true;
				}
				catch(Exception ex)
				{
					System.out.println("Error playing music with Sound");
					ex.printStackTrace();
				}
			}
		});
		
		final JButton whereYaAt = new JButton("Where Ya At");
		whereYaAt.addActionListener(new ActionListener () {
			public void actionPerformed(ActionEvent e){
				try 
				{
					// looks to see if a song is playing and if one is, this stops it and closes it
					// then sets the boolean back to false to notify that no song is playing
					if (playing == true)
					{
						clip.stop();
						clip.close();
						playing = false;
					}
					AudioInputStream aIS = AudioSystem.getAudioInputStream(new File("/Users/TNT/Music/Future/Future - Dirty Sprite 2 (DS 2) [Deluxe] (2015)/Where Ya At.wav").getAbsoluteFile());
					clip = AudioSystem.getClip();
					clip.open(aIS);
					clip.start();		
					playing = true;
				}
				catch(Exception ex)
				{
					System.out.println("Error playing music with Sound");
					ex.printStackTrace();
				}
			}
		});
		
		final JButton exitButton = new JButton("Exit Program");
		exitButton.addActionListener(new ActionListener (){
			public void actionPerformed(ActionEvent e){
				int confirmed = JOptionPane.showConfirmDialog(window,
						"Are you sure you want to exit?", "Exit Torrelle's Music App",
						JOptionPane.YES_NO_OPTION);
				if (confirmed == JOptionPane.YES_OPTION) {
					window.setVisible(false);
					System.exit(0);
				}
			}
		});
		
		// add buttons
		mainPanel.add(fadeAway);
		mainPanel.add(bigRings);
		mainPanel.add(allYall);
		mainPanel.add(dollarCost);
		mainPanel.add(whereYaAt);
		mainPanel.add(exitButton);
		
		// fit everything together
		window.pack();
		// make everything visible
		window.setVisible(true);
	}
	// TODO: Make helper function below, possibly more
	// TODO: Display album covers and maybe time slider
	// TODO: Package into app form
	/* public static void check_if_playing()
	{
		if (playing == true)
		{
			clip.stop;
		}
	}*/
}