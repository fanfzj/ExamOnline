
Imports System
Imports System.Data
Imports System.Data.SqlClient
Public Class 登陆

    Private Sub Form_Unload(Cancel As Integer)
        If MsgBox("你选择了退出系统登录, 退出将不能启动管理系统!" & vbCrLf _
        & "是否真的退出？", vbYesNo + vbQuestion, "登录验证") = vbYes Then
            End '卸载登录窗体
        End If
    End Sub
    Private Sub Button2_Click(sender As Object, e As EventArgs)
        '请求用户确认是否真的退出系统登录
        If MsgBox("你选择了退出系统登录, 退出将不能启动管理系统!" & vbCrLf _
        & "是否真的退出？", vbYesNo + vbQuestion, "登录验证") = vbYes Then
            End'卸载登录窗体
        End If
    End Sub
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles Me.Load
        Label1.BackColor = Color.Transparent
        Label2.BackColor = Color.Transparent
        Label5.BackColor = Color.Transparent
        '清空用户名和口令文本框
        TextName.Text = ""
        TextPasssword.Text = ""

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim sqlConnection1 As SqlClient.SqlConnection
        sqlConnection1 = New System.Data.SqlClient.SqlConnection("Server=(local);database=(在线考试系统);uid=fanfzj;pwd=123456;")  '“server=计算机名;database=数据库名;uid=登录数据库用户名;pwd=登录数据库密码”  )
        sqlConnection1.Open()         '打开数据库  


        '验证代码  
        Dim sql As String = "select count(*) from UserInfo where 用户名='" & TextName.Text.Trim() & "' and 密码='" & TextPasssword.Text() & "'"
        Dim sqlCmd As SqlCommand = New SqlCommand(sql, sqlConnection1)

        Dim count As Integer
        count = sqlCmd.ExecuteScalar

        If count > 0 Then
            MsgBox("登陆成功!")
        Else
            MsgBox("登陆失败!")
        End If

        sqlConnection1.Close()     '关闭数据库  
        Static intLogTimes As Integer                    '验证登陆次数
        intLogTimes = intLogTimes + 1
        If intLogTimes > 3 Then
            MsgBox("你已经超过允许的登录验证次数！" & vbCr _
                 & "应用程序将结束！", vbCritical, "登录验证")
            End                                          '结束应用程序
        End If
    End Sub
End Class

