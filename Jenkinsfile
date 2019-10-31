pipeline {
  agent any
  stages {
    stage('Init') {
      steps {
        sh '-Dorg.jenkinsci.plugins.durabletask.BourneShellScript.LAUNCH_DIAGNOSTICS=true'
      }
    }
    stage('Prepare') {
      steps {
        sh 'sh \'rm -rf build/api\''
      }
    }
  }
}