/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package seleniumdemo2;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;
/**
 *
 * @author DELL
 */
public class Seleniumdemo2 {

    /**
     * @param args the command line arguments
     */
    public static WebDriver driver = null;
    public static void main(String[] args) throws InterruptedException{
        // TODO code application logic here
        System.setProperty("webdriver.chrome.driver", ".\\driver\\chromedriver.exe");
        driver = new ChromeDriver();
        driver.manage().timeouts().implicitlyWait(150, TimeUnit.SECONDS);
        driver.navigate().to("http://localhost/librarynew/");
        driver.manage().window().fullscreen();
        WebElement my;
        //TO LOGIN
        my = driver.findElement(By.id("uname"));
        my.sendKeys("harsh2003");
        Thread.sleep(2000);
        my = driver.findElement(By.id("pass"));
        my.sendKeys("Harshjain123@");
        Thread.sleep(2000);
        my = driver.findElement(By.id("submit"));
        my.click();
        Thread.sleep(2000);
        driver.switchTo().alert().accept();
        my = driver.findElement(By.id("uname"));
        my.sendKeys("harsh2002");
        Thread.sleep(2000);
        my = driver.findElement(By.id("pass"));
        my.sendKeys("Harshjain123@");
        Thread.sleep(2000);
        my = driver.findElement(By.id("submit"));
        my.click();
        driver.manage().window().fullscreen();
        Thread.sleep(2000);
        my = driver.findElement(By.id("book"));
        my.click();
        driver.manage().window().fullscreen();
        //TO INSERT DATA OF BOOKS
        my = driver.findElement(By.id("id"));
        my.sendKeys("20091");
        Thread.sleep(2000);
        my = driver.findElement(By.id("book_name"));
        my.sendKeys("Javascript");
        Thread.sleep(2000);
        my = driver.findElement(By.id("book_publisher"));
        my.sendKeys("Shroff Publisher");
        Thread.sleep(2000);
        my = driver.findElement(By.id("shelf"));
        my.sendKeys("A2/12/1");
        Thread.sleep(2000);
        my = driver.findElement(By.id("sbt"));
        my.click();
        Thread.sleep(2000);
        driver.switchTo().alert().accept();
        driver.manage().window().fullscreen();
        my = driver.findElement(By.id("book1"));
        my.click();
        driver.manage().window().fullscreen();
        //TO SEARCH THE BOOKS
        my = driver.findElement(By.id("ss"));
        my.sendKeys("javascript");
        Thread.sleep(2000);
        //TO UPDATE THE BOOKS
        driver.navigate().to("http://localhost/librarynew/update.php?bookid=20091");
        my = driver.findElement(By.id("book_publisher"));
        my.clear();
        my.sendKeys("Roy Publishers");
        Thread.sleep(2000);
        my = driver.findElement(By.id("sbt"));
        my.click();
        Thread.sleep(2000);
        driver.switchTo().alert().accept();
        driver.manage().window().fullscreen();
        my = driver.findElement(By.id("ss"));
        my.sendKeys("javascript");
        Thread.sleep(2000);
        //TO DELETE THE BOOKS
        driver.navigate().to("http://localhost/librarynew/delete.php?bookid=20091");
        Thread.sleep(2000);
        driver.switchTo().alert().accept();
        driver.manage().window().fullscreen();
    }
    
}
