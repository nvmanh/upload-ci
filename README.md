# upload-ci

### 1. Using gradle plugin


``` groovy
// first add the maven dependency for the plugin
buildscript {
  repositories {
    jcenter() // also works with mavenCentral()
    maven {
      url "http://dl.bintray.com/manhnv/gradle-plugins"
    }
  }
  dependencies {
    classpath 'com.framgia.gradle:gradle-fileupload-plugin:1.1.0'
  }
}

// then apply the plugin to the app module
apply plugin: 'com.framgia.gradle.fileupload'

// then specify properties for file upload
fileupload {
  url = 'http://192.168.6.176/upload/accept.php'
  file = "$projectDir/build/outputs/apk/app-debug.apk"
  params.'project' = '1'
  auth { //if you need authentication
    username = 'develop1'
    password = 'Aa@123456'
  }
}
```

### 2. Using GUI plugin

- Download [Plugin file](https://github.com/nvmanh/upload-ci/blob/master/CI-upload-gui-plugin.zip) then install to android studio
- Download [Config file](https://github.com/nvmanh/upload-ci/blob/master/framgia-upload.ic) to project root directory

```java
- Open Android Studio / Setting / Plugins/ Install plugin from disk
- Select downloaded plugin above
- Restart Android studio
- You can see on the navigation (top menu, on the right of android studio) a menu name "Framgia"
- Config your framgia-upload.ic
```
